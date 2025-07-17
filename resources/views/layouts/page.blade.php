<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurination - Platform Penilaian Lomba Antar Sekolah</title>
    <link rel="icon" href="/favicon.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200" x-data="{ mobileMenuOpen: false }" x-cloak>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                        <i data-lucide="award" class="w-5 h-5 text-white"></i>
                    </div>
                    <span class="ml-2 text-xl font-bold text-gray-900">Jurination</span>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/#features" class="text-gray-600 hover:text-blue-600 transition-colors">Fitur</a>
                    <a href="/#pricing" class="text-gray-600 hover:text-blue-600 transition-colors">Harga</a>
                    {{-- <a href="/#testimonials" class="text-gray-600 hover:text-blue-600 transition-colors">Testimoni</a> --}}
                    <a href="/#contact" class="text-gray-600 hover:text-blue-600 transition-colors">Kontak</a>
                </nav>

                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login" class="text-gray-600 hover:text-blue-600 transition-colors">Masuk</a>
                    <a href="/register" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">Daftar</a>
                </div>

                <!-- Mobile menu button -->
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-controls="mobile-menu"
                    class="md:hidden p-2"
                >
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div
                id="mobile-menu"
                x-show="mobileMenuOpen"
                x-transition
                x-cloak
                class="md:hidden py-4 border-t border-gray-200"
            >
                <div class="flex flex-col space-y-4">
                    <a href="/#features" class="text-gray-600 hover:text-blue-600 transition-colors">Fitur</a>
                    <a href="/#pricing" class="text-gray-600 hover:text-blue-600 transition-colors">Harga</a>
                    {{-- <a href="/#testimonials" class="text-gray-600 hover:text-blue-600 transition-colors">Testimoni</a> --}}
                    <a href="/#contact" class="text-gray-600 hover:text-blue-600 transition-colors">Kontak</a>
                    <div class="flex flex-col space-y-2 pt-4 border-t border-gray-200">
                        <a href="/login" class="text-gray-600 hover:text-blue-600 transition-colors">Masuk</a>
                        <a href="/register" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors text-center">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <main class="mt-16">
        {{ $slot }}
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        </div> --}}
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                            <i data-lucide="award" class="w-5 h-5 text-white"></i>
                        </div>
                        <span class="ml-2 text-xl font-bold">Jurination</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Platform penilaian lomba antar sekolah terdepan yang membantu ribuan sekolah menyelenggarakan kompetisi Paskibra, Rukibra, Pramuka, dan PBB dengan mudah dan profesional.
                    </p>
                    {{-- <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="facebook" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="twitter" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="instagram" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="youtube" class="w-6 h-6"></i>
                        </a>
                    </div> --}}
                </div>

                <!-- Product -->
                @if (request()->is('/'))
                <div>
                    <h3 class="text-lg font-semibold mb-4">Produk</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fitur</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Harga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Demo</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tutorial</a></li>
                    </ul>
                </div>
                @endif

                <!-- Support -->
                {{-- <div>
                    <h3 class="text-lg font-semibold mb-4">Dukungan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Panduan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">WhatsApp</a></li>
                    </ul>
                </div> --}}
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Jurination by Irondevlab
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="{{ route('privacy-policy', "id") }}" class="text-gray-400 hover:text-white text-sm transition-colors">Kebijakan Privasi</a>
                    <a href="{{ route('terms', "id") }}" class="text-gray-400 hover:text-white text-sm transition-colors">Syarat Layanan</a>
                    {{-- <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <div x-data="{ showScrollTop: false }" @scroll.window="showScrollTop = window.pageYOffset > 300">
        <button 
            x-show="showScrollTop" 
            x-transition
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-8 right-8 bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 transition-colors z-40"
        >
            <i data-lucide="arrow-up" class="w-6 h-6"></i>
        </button>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
