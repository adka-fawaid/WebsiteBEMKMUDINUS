<!-- Footer -->
<footer class="relative bg-gradient-to-br from-gray-50 via-white to-blue-50">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-indigo-500/5 rounded-full blur-3xl -ml-40 -mb-40"></div>

    <!-- Main Footer Content -->
    <div class="relative z-10">
        <!-- Links Section -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-8 lg:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-10">
                <!-- About Section -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">BEM KM UDINUS</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Dian Nuswantoro Semarang Tahun
                        Periode 2025/2026 Kabinet Aksa Sinergi <span class="italic">"Selaras Bermakna Nyata"</span>.
                    </p>
                    <div class="flex gap-2">
                        <img src="{{ asset('img/logo/logo-bemkm-transparan.png') }}" class="h-12 w-12 object-contain"
                            alt="BEMKM Logo">
                        <img src="{{ asset('img/logo/logo-kabinet-transparan.png') }}" class="h-12 w-12 object-contain"
                            alt="Aksa Sinergi Logo">
                    </div>
                </div>

                <!-- Navigation Links -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Navigasi
                    </h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="/"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/berita"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="/foto"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Kegiatan
                            </a>
                        </li>
                        <li>
                            <a href="https://sites.google.com/mhs.dinus.ac.id/kalenderkm" target="_blank"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Kalender
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Page Links -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Halaman
                    </h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="/kabinet"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Kabinet
                            </a>
                        </li>
                        <li>
                            <a href="mailto:bemkm@orma.dinus.ac.id"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Kontak
                            </a>
                        </li>
                        <li>
                            <a href="/proker"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Program Kerja
                            </a>
                        </li>
                        <li>
                            <a href="/forum"
                                class="text-gray-600 hover:text-blue-600 text-sm flex items-center gap-2 group transition-all duration-300">
                                <span
                                    class="w-1.5 h-1.5 bg-blue-600 rounded-full group-hover:w-2 group-hover:h-2 transition-all"></span>
                                Forum dan Kajian
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Kontak
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Gedung F UDINUS <a href="https://maps.app.goo.gl/nd2qTKHGDPYRi7tg8"
                                    class="text-blue-600 hover:text-blue-800 transition-colors underline">(Lihat
                                    Map)</a></span>
                        </li>
                        <li class="flex items-start gap-3 text-sm">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:bemkm@orma.dinus.ac.id"
                                class="text-gray-600 hover:text-blue-600 transition-colors">bemkm@orma.dinus.ac.id</a>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>0895710034499 (Nata)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="border-t border-gray-200">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-6">
                <div class="flex flex-col gap-4">
                    <h3 class="text-lg font-semibold text-gray-800 text-center">Ikuti Kami</h3>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="#" target="_blank"
                            class="flex items-center gap-3 p-3 rounded-xl bg-transparent hover:bg-blue-50 group transition-all duration-300 hover:scale-105">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 group-hover:bg-blue-600 transition-all duration-300 flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </div>
                            <span
                                class="text-sm text-gray-700 group-hover:text-blue-600 transition-colors font-medium">Facebook</span>
                        </a>
                        <a href="#" target="_blank"
                            class="flex items-center gap-3 p-3 rounded-xl bg-transparent hover:bg-blue-50 group transition-all duration-300 hover:scale-105">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 group-hover:bg-blue-600 transition-all duration-300 flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </div>
                            <span
                                class="text-sm text-gray-700 group-hover:text-blue-600 transition-colors font-medium">Twitter</span>
                        </a>
                        <a href="https://www.tiktok.com/@bemkmudinus/" target="_blank"
                            class="flex items-center gap-3 p-3 rounded-xl bg-transparent hover:bg-blue-50 group transition-all duration-300 hover:scale-105">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 group-hover:bg-blue-600 transition-all duration-300 flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                </svg>
                            </div>
                            <span
                                class="text-sm text-gray-700 group-hover:text-blue-600 transition-colors font-medium">@bemkmudinus</span>
                        </a>
                        <a href="https://www.instagram.com/bemkmudinus/" target="_blank"
                            class="flex items-center gap-3 p-3 rounded-xl bg-transparent hover:bg-blue-50 group transition-all duration-300 hover:scale-105">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 group-hover:bg-blue-600 transition-all duration-300 flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </div>
                            <span
                                class="text-sm text-gray-700 group-hover:text-blue-600 transition-colors font-medium">@bemkmudinus</span>
                        </a>
                        <a href="https://www.youtube.com/@bemkmudinusofficial8044" target="_blank"
                            class="flex items-center gap-3 p-3 rounded-xl bg-transparent hover:bg-blue-50 group transition-all duration-300 hover:scale-105">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 group-hover:bg-blue-600 transition-all duration-300 flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </div>
                            <span
                                class="text-sm text-gray-700 group-hover:text-blue-600 transition-colors font-medium">BEM
                                KM UDINUS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="border-t border-gray-200 backdrop-blur-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-4">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm">
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span>© 2026 BEM KM UDINUS. All Rights Reserved.</span>
                    </div>
                    <a href="/"
                        class="text-gray-600 hover:text-blue-600 transition-colors flex items-center gap-2 group">
                        <span class="font-medium">Kementerian Kreativitas dan Inovasi</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
