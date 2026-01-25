@extends('guest.components.layout')

@section('content')
    <!-- struktural -->
    <section id="struktural"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-orange-50/30 py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">

            <!-- Header Section -->
            <div class="text-center mt-5 mb-8 md:mb-12">
                <h2
                    class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl mb-4">
                    Struktural Kabinet BEM KM UDINUS
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto inline">
                    Mengenal lebih dekat struktur organisasi Kabinet Aksa Sinergi BEM KM UDINUS Periode 2025/2026
                </p>
            </div>

            <!-- Grid 3 Kolom: Presiden, Logo, Wakil -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-8">

                <!-- PRESIDEN MAHASISWA -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div
                            class="relative overflow-hidden h-64 bg-gradient-to-br from-blue-600 to-blue-800 p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="max-w-[220px] max-h-[220px] object-cover rounded-lg shadow-xl transition-transform duration-700 group-hover:scale-110"
                                alt="Presiden Mahasiswa">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                PRESIDEN MAHASISWA
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- LOGO KABINET -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full">
                        <div
                            class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center h-64">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="max-w-[220px] h-auto transition-transform duration-700 group-hover:scale-110 drop-shadow-2xl"
                                alt="Logo Aksa Sinergi">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                LOGO KABINET AKSA SINERGI
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm">#bemkmudinus</p>
                        </div>
                    </div>
                </div>

                <!-- WAKIL PRESIDEN -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div
                            class="relative overflow-hidden h-64 bg-gradient-to-br from-blue-600 to-blue-800 p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="max-w-[220px] max-h-[220px] object-cover rounded-lg shadow-xl transition-transform duration-700 group-hover:scale-110"
                                alt="Wakil Presiden Mahasiswa">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                WAKIL PRESIDEN MAHASISWA
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- VISI -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div
                            class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center h-64">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="max-w-[220px] h-auto transition-transform duration-700 group-hover:scale-110 drop-shadow-2xl"
                                alt="Visi">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                VISI
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- SEKRETARIS JENDERAL -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div
                            class="relative overflow-hidden h-64 bg-gradient-to-br from-blue-600 to-blue-800 p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="max-w-[220px] max-h-[220px] object-cover rounded-lg shadow-xl transition-transform duration-700 group-hover:scale-110"
                                alt="Sekretaris Jenderal">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                SEKRETARIS JENDERAL
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- MISI -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div
                            class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-800 p-8 flex items-center justify-center h-64">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="max-w-[220px] h-auto transition-transform duration-700 group-hover:scale-110 drop-shadow-2xl"
                                alt="Misi">
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                MISI
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- BIRO ADMINISTRASI -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div class="relative overflow-hidden h-64">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                <img src="{{ asset('assets/images/foto_grup.png') }}"
                                    class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                    alt="Biro Administrasi">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                BIRO ADMINISTRASI
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- MASKOT -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div class="relative overflow-hidden h-64">
                            <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-orange-700 p-4">
                                <img src="{{ asset('assets/img/kabinet/maskot.png') }}"
                                    class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                    alt="Maskot Kabinet">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                MASKOT KABINET
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- BIRO KEUANGAN -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div class="relative overflow-hidden h-64">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                <img src="{{ asset('assets/images/foto_grup.png') }}"
                                    class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                    alt="Biro Keuangan">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                BIRO KEUANGAN
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

            </div>

            {{-- GRID KHUSUS BIRO (2 kolom, imbang) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mb-8">

                <!-- BIRO PSDM -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div class="relative overflow-hidden h-64">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                <img src="{{ asset('assets/images/psdm.png') }}"
                                    class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                    alt="Biro PSDM">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                BIRO PSDM
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

                <!-- BIRO MEDKOMINFO -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                        <div class="relative overflow-hidden h-64">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                <img src="{{ asset('assets/images/medkom.png') }}"
                                    class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                    alt="Biro Medkominfo">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                BIRO MEDKOMINFO
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>

            </div>

            {{-- KEMENKOAN PERGERAKAN (Full Width) --}}
            <div class="mb-8">
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative">
                        <!-- Banner Image -->
                        <div class="relative overflow-hidden h-44 bg-gradient-to-r from-blue-600 to-indigo-700">
                            <img src="{{ asset('assets/images/kemenkoan_pergerakan.png') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Kemenkoan Pergerakan">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-base md:text-lg mb-2 uppercase tracking-wider">
                                KEMENKOAN PERGERAKAN
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>
            </div>


            {{-- Grid 3 Kolom: Kementerian di bawah Pergerakan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-8">
                @php
                    $kementerian1 = [
                        ['nama' => 'KEMENTERIAN SOSIAL POLITIK', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN PP&I', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN SOSIAL MASYARAKAT', 'image' => 'foto_grup.png'],
                    ];
                @endphp

                @foreach ($kementerian1 as $item)
                    <div class="group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                            <div class="relative overflow-hidden h-64">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                    <img src="{{ asset('assets/images/' . $item['image']) }}"
                                        class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $item['nama'] }}">
                                </div>
                            </div>
                            <div class="p-5 md:p-6">
                                <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                    {{ $item['nama'] }}
                                </h6>
                                <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                                <a href="{{ route('guest.profil.struktural.detail') }}"
                                    class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                    <span>Selengkapnya</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- KEMENKOAN PENAUNGAN & KESEJAHTERAAN (Full Width) --}}
            <div class="mb-8">
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative">
                        <div class="relative overflow-hidden h-44 bg-gradient-to-r from-blue-600 to-indigo-700">
                            <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Kemenkoan Penaungan & Kesejahteraan">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-base md:text-lg mb-2 uppercase tracking-wider">
                                KEMENKOAN PENAUNGAN & KESEJAHTERAAN
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grid 3 Kolom: Kementerian di bawah Penaungan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-8">
                @php
                    $kementerian2 = [
                        ['nama' => 'KEMENTERIAN DALAM NEGERI', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN KESPORA', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN ADVOKESMA', 'image' => 'foto_grup.png'],
                    ];
                @endphp

                @foreach ($kementerian2 as $item)
                    <div class="group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                            <div class="relative overflow-hidden h-64">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                    <img src="{{ asset('assets/images/' . $item['image']) }}"
                                        class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $item['nama'] }}">
                                </div>
                            </div>
                            <div class="p-5 md:p-6">
                                <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                    {{ $item['nama'] }}
                                </h6>
                                <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                                <a href="{{ route('guest.profil.struktural.detail') }}"
                                    class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                    <span>Selengkapnya</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- KEMENKOAN RELASI & INOVASI (Full Width) --}}
            <div class="mb-8">
                <div class="group">
                    <div
                        class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative">
                        <div class="relative overflow-hidden h-44 bg-gradient-to-r from-blue-600 to-indigo-700">
                            <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                alt="Kemenkoan Relasi & Inovasi">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-5 md:p-6">
                            <h6 class="font-bold text-gray-800 text-base md:text-lg mb-2 uppercase tracking-wider">
                                KEMENKOAN RELASI & INOVASI
                            </h6>
                            <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                            <a href="{{ route('guest.profil.struktural.detail') }}"
                                class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grid 3 Kolom: Kementerian di bawah Relasi --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-8">
                @php
                    $kementerian3 = [
                        ['nama' => 'KEMENTERIAN LUAR NEGERI', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN KREASI', 'image' => 'foto_grup.png'],
                        ['nama' => 'KEMENTERIAN BUMKM', 'image' => 'foto_grup.png'],
                    ];
                @endphp

                @foreach ($kementerian3 as $item)
                    <div class="group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                            <div class="relative overflow-hidden h-64">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 p-4">
                                    <img src="{{ asset('assets/images/' . $item['image']) }}"
                                        class="w-full h-full object-cover rounded-lg transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $item['nama'] }}">
                                </div>
                            </div>
                            <div class="p-5 md:p-6">
                                <h6 class="font-bold text-gray-800 text-sm md:text-base mb-2 uppercase tracking-wider">
                                    {{ $item['nama'] }}
                                </h6>
                                <p class="text-gray-500 text-xs md:text-sm mb-4">#bemkmudinus</p>
                                <a href="{{ route('guest.profil.struktural.detail') }}"
                                    class="inline-flex items-center gap-2 text-orange-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                    <span>Selengkapnya</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Decorative Divider -->
            <div class="flex items-center justify-center mt-12 md:mt-16">
                <div class="flex-1 h-px bg-gradient-to-r from-transparent to-blue-500 max-w-xs"></div>
                <div class="w-4 h-4 mx-4 bg-blue-500 rotate-45 transform origin-center"></div>
                <div class="flex-1 h-px bg-gradient-to-l from-transparent to-blue-500 max-w-xs"></div>
            </div>

        </div>
    </section>
    <!-- struktural -->
@endsection
