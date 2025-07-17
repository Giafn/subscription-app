<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pilih Paket Langganan') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-6">
                @if (isset($currentPlan['plan_id']))
                    <div class="bg-blue-50 border border-blue-300 rounded-2xl shadow p-6 md:w-1/3 w-full">
                        <h3 class="text-xl font-semibold text-blue-700 mb-4">Paket Terpilih</h3>

                        <div class="grid gap-4">
                            <div>
                                <span class="text-sm text-gray-500">Nama Paket</span>
                                <p class="text-2xl font-bold text-gray-800">{{ $currentPlan['plan']['name'] }}</p>
                            </div>

                            <div>
                                <span class="text-sm text-gray-500">Deskripsi</span>
                                <p class="text-gray-700">{{ $currentPlan['plan']['description'] }}</p>
                            </div>

                            <div>
                                <span class="text-sm text-gray-500">Harga</span>
                                <p class="text-lg font-semibold text-green-600">
                                    Rp{{ number_format($currentPlan['plan']['price'], 0, ',', '.') }}
                                </p>
                            </div>

                            <div class="grid gap-2 pt-4 border-t text-sm text-gray-500">
                                <div class="flex flex-col sm:flex-row sm:justify-between break-words">
                                    <span>ID Plan:</span>
                                    <span class="text-gray-700">{{ $currentPlan['plan_id'] }}</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between break-words">
                                    <span>Invoice:</span>
                                    <span class="text-gray-700">{{ $currentPlan['invoice_id'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sm text-slate-600 mt-6">
                            *Paket Tidak Bisa Dirubah Setelah Pembayaran Dilakukan
                        </div>
                    </div>
                @endif

                {{-- Konten Utama --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full {{ isset($currentPlan['plan_id']) ? 'md:w-2/3' : 'md:w-full' }}">
                    <div class="p-6 text-gray-900 space-y-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($plans as $plan)
                                <div class="bg-white rounded-2xl shadow-lg border hover:border-blue-400 transition duration-200 p-6 space-y-4 flex flex-col justify-between">
                                    <div class="space-y-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $plan->name }}</h4>
                                        <p class="text-lg font-semibold text-blue-600">Rp{{ number_format($plan->price, 0, ',', '.') }}</p>
                                        
                                        <ul class="list-disc list-inside text-gray-600">
                                            @foreach (explode(", ", $plan->description) as $feature)
                                                <li>{{ $feature }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <button
                                        wire:click="subscribe('{{ $plan->id }}')"
                                        class="w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-2 mt-4 rounded-lg font-medium transition"
                                    >
                                        Pilih Paket
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('open-snap', ({ snapToken }) => {
                window.snap.pay(snapToken, {
                    onSuccess: function(result) {
                        window.livewire.emit('snapSuccess', result);
                    },
                    onPending: function(result) {
                        alert('Menunggu pembayaran...');
                    },
                    onError: function(result) {
                        alert('Pembayaran gagal: ' + result.status_message);
                    },
                    onClose: function() {
                        alert('Apakah Anda sudah melakukan pembayaran? Jika ya, silakan refresh halaman ini.');
                    }
                });
            });
        });
    </script>
</div>

{{-- <di --}}
