<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:w-2/3 w-full">
                    <div class="p-6 text-gray-900 space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-xl border border-gray-200 shadow-sm">
                                <h4 class="text-sm text-gray-500">Status Deployment</h4>
                                <p class="text-lg font-semibold text-yellow-700 mt-1">Ready</p>
                                <p class="text-xs text-gray-400 mt-1">Aplikasi event telah tersedia</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-xl border border-gray-200 shadow-sm">
                                <h4 class="text-sm text-gray-500">Sisa Kuota Event</h4>
                                <p class="text-lg font-semibold mt-1">{{ $quota['used']}} digunakan dari {{ $quota['total'] }}</p>
                                <p class="text-xs text-gray-400 mt-1">Kuota event aktif yang tersedia</p>
                            </div>
                        </div>
                        <div x-data="{
                            passwordVisible: false,
                            copy(text) {
                                navigator.clipboard.writeText(text).then(() => alert('Disalin ke clipboard!'));
                            }
                        }" class="bg-white rounded-xl shadow p-6 border border-blue-200 space-y-6">

                            <h2 class="text-xl font-semibold text-gray-800">Kredensial Akun</h2>

                            <div>
                                <label class="text-sm text-gray-600">Email</label>
                                <div class="flex items-center mt-1 bg-gray-50 border rounded px-3 py-2">
                                    <span class="text-gray-800 select-all">demo@example.com</span>
                                    <button 
                                        @click="copy('demo@example.com')" 
                                        class="ml-auto text-blue-600 hover:text-blue-800 text-sm"
                                    >
                                        Salin
                                    </button>
                                </div>
                            </div>

                            <div>
                                <label class="text-sm text-gray-600">Password</label>
                                <div class="flex items-center mt-1 bg-gray-50 border rounded px-3 py-2">
                                    <input 
                                        :type="passwordVisible ? 'text' : 'password'" 
                                        value="password123"
                                        readonly
                                        class="bg-transparent flex-1 text-gray-800 focus:outline-none select-all border-none"
                                    >
                                    <button 
                                        @click="passwordVisible = !passwordVisible"
                                        class="text-blue-600 hover:text-blue-800 text-sm mr-2"
                                    >
                                        <span x-text="passwordVisible ? 'Sembunyikan' : 'Lihat'"></span>
                                    </button>
                                    <button 
                                        @click="copy('password123')" 
                                        class="text-blue-600 hover:text-blue-800 text-sm"
                                    >
                                        Salin
                                    </button>
                                </div>
                            </div>

                            <a 
                                href="https://app.lomba-mu.com/login" 
                                class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition"
                            >
                                Buka Aplikasi
                            </a>
                        </div>

                        <h3 class="text-xl font-semibold text-gray-800">Riwayat Transaksi</h3>
                        <div>
                            <h4 class="text-md font-semibold text-green-700 mb-2">Transaksi Berhasil</h4>

                            @foreach ($transactions as $transaksi)
                                <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-3">
                                    <div class="flex justify-between text-sm">
                                        <div>
                                            <p class="font-semibold text-gray-800">{{ $transaksi['plan'] }}</p>
                                            <p class="text-xs text-gray-500">{{ $transaksi['created_at'] }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-green-600">Rp{{ number_format($transaksi['price'], 0, ',', '.') }}</p>
                                            <p class="text-xs text-gray-500 uppercase">{{ $transaksi['status'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
