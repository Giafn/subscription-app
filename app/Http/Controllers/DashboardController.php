<?php

namespace App\Http\Controllers;

use App\Models\EventQuota;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'subscriber') {
            $currentPlan = $this->dataSubcriber()['currentPlan'];
            $quota = $this->dataSubcriber()['quota'];
            $transactions = $this->dataSubcriber()['transactions'];
            // dd($transactions);
            

            return view('dashboard-user', compact('currentPlan', 'quota', 'transactions'));
        } else {
            return view('dashboard');
        }
    }

    private function dataSubcriber()
    {
        $user = Auth::user();

        // Ambil subscription aktif terbaru
        $subscription = $user->subscriptions()
            ->with('plan:id,name,price,description')
            ->where('status', 'active')
            ->latest()
            ->first();

        // Default jika tidak ada subscription aktif
        $currentPlan = $subscription
            ? [
                'plan_id' => $subscription->plan_id,
                'invoice_id' => $subscription->invoice_id,
                'plan' => [
                    'id' => $subscription->plan->id ?? null,
                    'name' => $subscription->plan->name ?? null,
                    'price' => $subscription->plan->price ?? null,
                    'description' => $subscription->plan->description ?? null,
                ]
            ]
            : [];

        // Hitung kuota event
        $quotaData = $subscription
            ? EventQuota::where('subscription_id', $subscription->id)
                ->where('user_id', $user->id)
                ->get()
            : collect();

        $quota = [
            'used' => $quotaData->where('used', true)->count(),
            'total' => $quotaData->count(),
        ];

        // Transaksi user
        $transactions = Transaction::where('user_id', $user->id)
            ->with('subscription.plan:id,name,price')
            ->latest()
            ->get()
            ->map(function ($tx) {
                return [
                    'plan' => $tx->subscription->plan->name ?? '-',
                    'price' => $tx->subscription->plan->price ?? 0,
                    'status' => $tx->status,
                    'created_at' => $tx->created_at,
                ];
            });

        return [
            'currentPlan' => $currentPlan,
            'quota' => $quota,
            'transactions' => $transactions,
        ];
    }
}
