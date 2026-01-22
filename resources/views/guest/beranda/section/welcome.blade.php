<section id="hero-home"
    class="relative min-h-screen flex items-center justify-center text-center overflow-hidden bg-gradient-to-br from-slate-50 via-white to-blue-50">

    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-blue-500/5 to-orange-500/5 rounded-full blur-3xl">
        </div>
    </div>

    <!-- Content -->
    <div class="container relative z-10 px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Logo atau Image bisa ditambahkan di sini -->
            <div class="mb-8">
                <div class="inline-block p-4 bg-white rounded-3xl shadow-xl shadow-blue-500/10 border border-gray-100">
                    <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}" class="w-24 h-24 object-contain"
                        alt="Logo BEM">
                </div>
            </div>

            <h1
                class="font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-orange-500 mb-6 text-5xl sm:text-6xl md:text-7xl lg:text-8xl leading-tight">
                BEM KM UDINUS
            </h1>

            <p class="text-gray-600 font-medium mb-4 text-xl sm:text-2xl md:text-3xl">
                <span class="text-orange-500">"</span> Bersinergi dalam Satu Aksi <span class="text-orange-500">"</span>
            </p>

            <p class="text-gray-500 max-w-2xl mx-auto mb-12 text-base sm:text-lg">
                Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Dian Nuswantoro
            </p>

            <div class="flex justify-center gap-4 flex-wrap">
                <a href="/kabinet"
                    class="group inline-flex items-center gap-2 font-bold rounded-full px-8 py-4 text-lg bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105">
                    <span>Lihat Profil</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#berita"
                    class="inline-flex items-center gap-2 font-bold rounded-full px-8 py-4 text-lg bg-white text-blue-700 hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl border-2 border-blue-100 hover:border-blue-200">
                    <span>Berita Terbaru</span>
                </a>
            </div>
        </div>
    </div>
</section>
