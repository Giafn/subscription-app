<div>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Subscriber') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="save" class="space-y-4 max-w-md mb-6">
                        <input type="text" wire:model="name" placeholder="Nama" class="w-full border p-2 rounded">
                        <input type="email" wire:model="email" placeholder="Email" class="w-full border p-2 rounded">
                        <input type="password" wire:model="password" placeholder="Password" class="w-full border p-2 rounded">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Subscriber</button>
                    </form>

                    <h2 class="text-lg font-semibold mb-2">Daftar Subscriber</h2>
                    <table class="w-full bg-white rounded shadow overflow-hidden">
                        <thead class="bg-gray-100 text-left">
                            <tr>
                                <th class="p-3">Nama</th>
                                <th class="p-3">Email</th>
                                <th class="p-3">Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $subscriber)
                                <tr class="border-t">
                                    <td class="p-3">{{ $subscriber->name }}</td>
                                    <td class="p-3">{{ $subscriber->email }}</td>
                                    <td class="p-3 text-sm text-gray-500">{{ $subscriber->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="p-3 text-center text-gray-400">Belum ada subscriber.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
