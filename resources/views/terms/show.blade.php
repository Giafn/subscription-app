<x-page-layout>
    
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-4xl mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold mb-6 text-center">{{ $title }}</h1>

        @foreach ($sections as $section)
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-2">{{ $section['title'] }}</h2>
                <p class="text-gray-700 leading-relaxed">{{ $section['content'] }}</p>
            </div>
        @endforeach

        <p class="mt-10 text-sm text-gray-500 italic text-center">
            {{ $lang === 'en' 
                ? 'Please review these terms regularly. Continued use means you accept them.' 
                : 'Silakan tinjau syarat ini secara berkala. Penggunaan terus-menerus berarti Anda menyetujuinya.' }}
        </p>
    </div>
</x-page-layout>
