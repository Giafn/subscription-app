<div>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Kelola Plan Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6 space-y-6">
                
                {{-- Form Plan --}}
                <form wire:submit.prevent="save" class="space-y-4 max-w-2xl">
                    <h3 class="text-lg font-semibold text-gray-700">
                        {{ $editing ? 'Edit Plan' : 'Tambah Plan Baru' }}
                    </h3>

                    <input type="text" wire:model="name" placeholder="Nama Plan"
                        class="w-full border border-gray-300 p-2 rounded" />

                    <select wire:model="type" class="w-full border border-gray-300 p-2 rounded">
                        <option value="">-- Pilih Tipe --</option>
                        <option value="recurring">Bulanan</option>
                        <option value="one_time">Per Lomba</option>
                    </select>

                    <input type="number" wire:model="price" placeholder="Harga"
                        class="w-full border border-gray-300 p-2 rounded" />

                    @if ($type === 'recurring')
                        <input type="number" wire:model="duration_days" placeholder="Durasi (hari)"
                            class="w-full border border-gray-300 p-2 rounded" />
                    @endif

                    <textarea wire:model="description" placeholder="Deskripsi"
                        class="w-full border border-gray-300 p-2 rounded"></textarea>

                    <div class="flex gap-2">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                            {{ $editing ? 'Update' : 'Simpan' }}
                        </button>
                        @if ($editing)
                            <button type="button" wire:click="$refresh"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">
                                Batal
                            </button>
                        @endif
                    </div>
                </form>

                {{-- Tabel Daftar Plan --}}
                <div class="overflow-x-auto mt-8">
                    <table class="w-full table-auto border border-gray-300 rounded shadow text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border">Nama</th>
                                <th class="px-4 py-2 border">Tipe</th>
                                <th class="px-4 py-2 border">Harga</th>
                                <th class="px-4 py-2 border">Durasi</th>
                                <th class="px-4 py-2 border">Deskripsi</th>
                                <th class="px-4 py-2 border text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($plans as $plan)
                                <tr class="bg-white hover:bg-gray-50">
                                    <td class="border px-4 py-2">{{ $plan->name }}</td>
                                    <td class="border px-4 py-2 capitalize">{{ $plan->type }}</td>
                                    <td class="border px-4 py-2">Rp{{ number_format($plan->price, 0, ',', '.') }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $plan->duration_days ?? '-' }}</td>
                                    <td class="border px-4 py-2">{{ $plan->description }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <button wire:click="edit('{{ $plan->id }}')"
                                            class="text-blue-600 hover:underline font-medium">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data plan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if (session()->has('success'))
                    <div class="text-green-600 font-medium">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
