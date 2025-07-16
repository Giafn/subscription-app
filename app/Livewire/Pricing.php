<?php

namespace App\Livewire;

use App\Models\Plan;
use App\Models\Subscription;
use App\Services\MidtransService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Masmerise\Toaster\Toaster;

class Pricing extends Component
{
    public $plans;
    public $selectedPlanId;
    public $snapToken;
    public $currentPlan;

    public function mount()
    {
        $user = Auth::user();

        $this->currentPlan = $user->subscriptions()
            ->where('status', 'active')
            ->select('plan_id', 'invoice_id')
            ->with('plan:id,name,price,description')
            ->first()?->toArray() ?? [];

        $this->plans = Plan::all();
        $this->snapToken = null; // reset kalau sebelumnya ada
    }

    public function subscribe($planId)
    {
        $user = Auth::user();
        $plan = Plan::findOrFail($planId);

        if ($user->subscriptions()->where('status', 'active')->exists()) {
            Toaster::error('Kamu sudah memiliki langganan aktif.');
            return;
        }

        $orderId = 'ORD-' . now()->timestamp . '-' . Str::random(5);

        DB::beginTransaction();

        try {
            // 🔁 Cancel semua transaksi pending sebelumnya
            $user->transactions()
                ->where('status', 'pending')
                ->update(['status' => 'cancelled']);

            // 🔁 Hapus semua subscription pending sebelumnya
            $user->subscriptions()
                ->where('status', 'pending')
                ->delete();

            // 🆕 Buat subscription baru
            $subscription = $user->subscriptions()->create([
                'id' => Str::uuid(),
                'plan_id' => $plan->id,
                'status' => 'pending',
                'invoice_id' => $orderId,
            ]);

            // 📦 Buat Snap Token dari Midtrans
            $midtrans = new MidtransService();
            $snapToken = $midtrans->createSnapToken([
                'transaction_details' => [
                    'order_id' => $orderId,
                    'gross_amount' => $plan->price,
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email' => $user->email,
                ],
                'item_details' => [
                    [
                        'id' => $plan->id,
                        'price' => $plan->price,
                        'quantity' => 1,
                        'name' => $plan->name,
                    ]
                ],
            ]);

            // 📝 Simpan Snap Token ke Subscription
            $subscription->update(['snap_token' => $snapToken]);

            // 💰 Simpan transaksi
            $user->transactions()->create([
                'id' => Str::uuid(),
                'subscription_id' => $subscription->id,
                'order_id' => $orderId,
                'amount' => $plan->price,
                'status' => 'pending',
            ]);

            DB::commit();

            // 🚀 Kirim event ke frontend Livewire
            $this->snapToken = $snapToken;
            $this->dispatch('open-snap', snapToken: $snapToken);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Gagal membuat subscription: ' . $e->getMessage());
            Toaster::error('Gagal membuat subscription: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pricing')
            ->layout('layouts.app');
    }
}
