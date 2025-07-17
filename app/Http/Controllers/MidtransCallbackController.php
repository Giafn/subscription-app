<?php

namespace App\Http\Controllers;

use App\Models\EventQuota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Subscription;
use App\Models\Transaction;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransCallbackController extends Controller
{
    public function handle(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        $notif = new Notification();

        $transactionStatus = $notif->transaction_status;
        $orderId = $notif->order_id;

        Log::info("🔁 Midtrans callback: Order ID = $orderId | Status = $transactionStatus");

        // Temukan transaksi berdasarkan order ID
        $transaction = Transaction::where('order_id', $orderId)->first();

        if (!$transaction) {
            Log::warning("🚫 Transaksi tidak ditemukan untuk Order ID: $orderId");
            return response()->json(['message' => 'Transaction not found'], 200);
        }

        $subscription = $transaction->subscription;

        if (!$subscription) {
            Log::warning("🚫 Subscription tidak ditemukan untuk Order ID: $orderId");
            return response()->json(['message' => 'Subscription not found'], 200);
        }

        $planType = $subscription->plan->type;
        if ($planType === 'one_time') {
            $this->makeQuotaEvent($subscription);
        }

        // Mapping status Midtrans → sistem internal
        switch ($transactionStatus) {
            case 'settlement':
            case 'capture':
                $transaction->status = 'success';
                $subscription->status = 'active';
                $subscription->start_date = $subscription->start_date ?? now();
                break;

            case 'pending':
                $transaction->status = 'pending';
                $subscription->status = 'pending';
                break;

            case 'deny':
            case 'expire':
            case 'cancel':
                $transaction->status = $transactionStatus === 'cancel' ? 'canceled' : 'failed';
                $subscription->status = 'expired';
                break;

            default:
                $transaction->status = 'failed';
                $subscription->status = 'expired';
                break;
        }

        $transaction->save();
        $subscription->save();

        Log::info("✅ Callback diproses: {$transactionStatus} → Transaksi #{$transaction->id}, Subscription #{$subscription->id}");

        return response()->json(['message' => 'OK'], 200);
    }

    private function makeQuotaEvent($subscription)
    {
        $eventQuota = new EventQuota();
        $eventQuota->user_id = $subscription->user_id;
        $eventQuota->subscription_id = $subscription->id;
        $eventQuota->used = false;
        $eventQuota->used_at = null;
        $eventQuota->save();
    }
}
