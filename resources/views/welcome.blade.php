<x-page-layout>
    <!-- Hero Section -->
    <section class="pt-20 pb-16 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Platform Penilaian Lomba
                    <span class="text-blue-500">Antar Sekolah</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Kelola lomba Paskibra, Rukibra, Pramuka, dan PBB dengan mudah. Sistem penilaian digital yang akurat, transparan, dan real-time untuk kompetisi sekolah.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/pricing" class="bg-blue-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-600 transition-colors">
                        Mulai Sekarang
                    </a>
                    {{-- <a href="#" class="border border-gray-300 text-gray-700 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-50 transition-colors">
                        Lihat Demo
                    </a> --}}
                </div>
            </div>

            <!-- Hero Image/Dashboard Preview -->
            <div class="mt-16 relative">
                <div class="bg-white rounded-xl shadow-2xl p-8 max-w-4xl mx-auto">
                    <div class="bg-gray-100 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">Dashboard Lomba Paskibra</h3>
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="bg-white p-4 rounded-lg">
                                <div class="text-2xl font-bold text-blue-500">12</div>
                                <div class="text-sm text-gray-600">Sekolah Peserta</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <div class="text-2xl font-bold text-green-500">8</div>
                                <div class="text-sm text-gray-600">Juri Aktif</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <div class="text-2xl font-bold text-orange-500">4</div>
                                <div class="text-sm text-gray-600">Kategori Lomba</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <div class="text-2xl font-bold text-purple-500">Live</div>
                                <div class="text-sm text-gray-600">Status Lomba</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Fitur Lengkap untuk Lomba Sekolah
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dari pendaftaran sekolah hingga pengumuman juara, kelola seluruh proses lomba Paskibra, Rukibra, Pramuka, dan PBB dalam satu platform.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="zap" class="w-6 h-6 text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Penilaian Real-time</h3>
                    <p class="text-gray-600">Sistem penilaian langsung untuk setiap gerakan PBB, formasi Paskibra, dan aktivitas Pramuka dengan sinkronisasi otomatis antar juri.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="bar-chart-3" class="w-6 h-6 text-green-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Analitik Performa</h3>
                    <p class="text-gray-600">Dashboard analitik lengkap untuk memantau performa setiap sekolah dengan grafik dan statistik yang mudah dipahami.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="users" class="w-6 h-6 text-purple-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Manajemen Juri</h3>
                    <p class="text-gray-600">Kelola juri dari berbagai instansi dengan mudah, atur hak akses, dan pantau aktivitas penilaian setiap juri secara real-time.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="file-text" class="w-6 h-6 text-orange-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Laporan Otomatis</h3>
                    <p class="text-gray-600">Generate laporan hasil lomba, sertifikat digital, dan dokumentasi lengkap secara otomatis dalam format PDF dan Excel.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="shield-check" class="w-6 h-6 text-red-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Keamanan Data</h3>
                    <p class="text-gray-600">Enkripsi data tingkat militer dan backup otomatis untuk menjaga keamanan data sekolah dan hasil penilaian lomba.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i data-lucide="smartphone" class="w-6 h-6 text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mobile Friendly</h3>
                    <p class="text-gray-600">Akses dari tablet dan smartphone untuk juri yang bergerak di lapangan, dengan interface yang responsif dan mudah digunakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Competition Types Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Mendukung Berbagai Jenis Lomba Sekolah
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Platform yang fleksibel untuk semua jenis kompetisi antar sekolah
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Paskibra -->
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="flag" class="w-8 h-8 text-red-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Paskibra</h3>
                    <p class="text-gray-600 text-sm">Penilaian formasi, gerakan, dan kedisiplinan pasukan pengibar bendera</p>
                </div>

                <!-- Rukibra -->
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="users-2" class="w-8 h-8 text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Rukibra</h3>
                    <p class="text-gray-600 text-sm">Evaluasi regu kibar bendera dengan kriteria penilaian yang detail</p>
                </div>

                <!-- Pramuka -->
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="compass" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pramuka</h3>
                    <p class="text-gray-600 text-sm">Lomba keterampilan kepramukaan, pioneering, dan aktivitas outdoor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Paket Khusus untuk Sekolah
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Harga terjangkau untuk semua jenis sekolah dan tingkat kompetisi
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">

                @foreach ($allPlans as $plan)
                    <div class="bg-white rounded-2xl shadow-lg border hover:border-blue-400 transition duration-200 p-6 space-y-4 flex flex-col justify-between">
                        <div class="space-y-2">
                            <div class="text-center space-y-2 mb-10 mt-5">
                                <h4 class="text-xl font-bold text-gray-800">{{ $plan->name }}</h4>
                                <p class="text-3xl font-semibold text-blue-600">Rp{{ number_format($plan->price, 0, ',', '.') }}</p>
                            </div>
                            
                            <ul class="space-y-4 my-8">
                                @foreach (explode(", ", $plan->description) as $feature)
                                    <li class="flex items-center">
                                        <i data-lucide="check" class="w-5 h-5 text-green-500 mr-3"></i>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                            
                        </div>

                        <a
                            href="{{ route('pricing') }}"
                            class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 transition-colors text-center"
                        >
                            Pilih Paket
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Dipercaya oleh Sekolah di Seluruh Indonesia
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Lihat bagaimana Jurination membantu sekolah menyelenggarakan lomba dengan sukses
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Jurination sangat membantu kami dalam menyelenggarakan lomba Paskibra tingkat kabupaten. Sistem penilaian yang transparan membuat semua sekolah puas dengan hasilnya."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </div>
                        <div class="ml-3">
                            <div class="font-semibold text-gray-900">Drs. Ahmad Wijaya</div>
                            <div class="text-sm text-gray-600">Kepala Dinas Pendidikan Kab. Bogor</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Interface yang mudah digunakan membuat guru-guru kami bisa fokus pada pembinaan siswa tanpa khawatir masalah teknis penilaian. Sangat recommended!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </div>
                        <div class="ml-3">
                            <div class="font-semibold text-gray-900">Sri Mulyani, S.Pd</div>
                            <div class="text-sm text-gray-600">Kepala Sekolah SMAN 1 Jakarta</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Dengan Jurination, kami berhasil menyelenggarakan lomba Pramuka se-provinsi dengan 150+ sekolah tanpa kendala. Laporan otomatis sangat membantu untuk dokumentasi."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-semibold">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </div>
                        <div class="ml-3">
                            <div class="font-semibold text-gray-900">Budi Santoso</div>
                            <div class="text-sm text-gray-600">Ketua Kwarda Pramuka Jawa Barat</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- FAQ Section -->
    <section class="py-20 bg-white" x-data="{ openFaq: null }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-xl text-gray-600">
                    Temukan jawaban untuk pertanyaan umum tentang Jurination
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-gray-50 rounded-lg border border-gray-200">
                    <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-semibold text-gray-900">Apakah Jurination cocok untuk semua jenis lomba sekolah?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': openFaq === 1 }"></i>
                    </button>
                    <div x-show="openFaq === 1" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Ya, Jurination dapat digunakan untuk berbagai jenis lomba sekolah seperti Paskibra, Rukibra, Pramuka, PBB, dan kompetisi lainnya. Platform kami fleksibel dan dapat disesuaikan dengan kriteria penilaian yang berbeda untuk setiap jenis lomba.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-gray-50 rounded-lg border border-gray-200">
                    <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-semibold text-gray-900">Bagaimana cara mendaftarkan sekolah untuk lomba?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': openFaq === 2 }"></i>
                    </button>
                    <div x-show="openFaq === 2" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Pendaftaran sangat mudah! Sekolah dapat mendaftar melalui link yang diberikan panitia, mengisi data sekolah dan peserta, kemudian mengunggah dokumen yang diperlukan. Sistem akan otomatis memverifikasi dan memberikan konfirmasi pendaftaran.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-gray-50 rounded-lg border border-gray-200">
                    <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-semibold text-gray-900">Apakah juri perlu training khusus untuk menggunakan sistem?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': openFaq === 3 }"></i>
                    </button>
                    <div x-show="openFaq === 3" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Tidak perlu training khusus. Interface Jurination dirancang sangat intuitif dan user-friendly. Kami juga menyediakan panduan singkat dan video tutorial. Tim support kami siap membantu juri yang membutuhkan bantuan teknis.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-gray-50 rounded-lg border border-gray-200">
                    <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-semibold text-gray-900">Bagaimana jika terjadi masalah teknis saat lomba berlangsung?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': openFaq === 4 }"></i>
                    </button>
                    <div x-show="openFaq === 4" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Kami memiliki tim support 24/7 yang siap membantu selama lomba berlangsung. Sistem juga dilengkapi dengan backup otomatis dan mode offline untuk memastikan penilaian tetap berjalan lancar meski ada gangguan koneksi internet.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-gray-50 rounded-lg border border-gray-200">
                    <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full px-6 py-4 text-left flex justify-between items-center">
                        <span class="font-semibold text-gray-900">Apakah hasil penilaian bisa diakses secara real-time?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': openFaq === 5 }"></i>
                    </button>
                    <div x-show="openFaq === 5" x-transition class="px-6 pb-4">
                        <p class="text-gray-600">Ya! Salah satu keunggulan Jurination adalah live scoring. Peserta, guru pendamping, dan penonton dapat melihat perkembangan skor secara real-time melalui dashboard publik yang dapat ditampilkan di layar besar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Siap Menyelenggarakan Lomba Sekolah yang Lebih Baik?
            </h2>
            <p class="text-xl text-blue-100 mb-8">
                Bergabunglah dengan ribuan sekolah yang telah mempercayai Jurination untuk lomba mereka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-blue-500 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-colors">
                    Mulai Berlangganan
                </a>
                {{-- <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-500 transition-colors">
                    Jadwalkan Demo
                </a> --}}
            </div>
        </div>
    </section>
</x-page-layout>
