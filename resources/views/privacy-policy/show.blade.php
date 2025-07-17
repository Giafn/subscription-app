<x-page-layout>
    
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-4xl mx-auto py-12 px-6 min-h-screen">
        <h1 class="text-3xl font-bold mb-6 text-center">{{ $title }}</h1>

        <div class="prose max-w-none text-gray-700">{!! $content !!}</div>

    </div>
    </div>
</x-page-layout>
