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

            <!-- Grid 2: Presiden & Wakil Presiden -->
            @php
                $presidenWapres = $unitOrganisasiList->whereIn('kategori', [
                    'Presiden Mahasiswa',
                    'Wakil Presiden Mahasiswa',
                ]);
            @endphp

            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                    @foreach ($presidenWapres as $unit)
                        <!-- {{ $unit->kategori }} -->
                        <div class="group">
                            <div
                                class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/img/unit-organisasi/' . $unit->logo) }}"
                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $unit->nama }}">
                                </div>
                                <div class="p-4 md:p-4">
                                    <h6 class="font-bold text-gray-800 text-sm md:text-base mb-3 uppercase tracking-wider">
                                        {{ $unit->nama }}
                                    </h6>
                                    <a href="{{ route('guest.profil.struktural.detail', $unit->id) }}"
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
            </div>

            <!-- Grid 1: Sekretaris Jenderal -->
            @php
                $sekjen = $unitOrganisasiList->where('kategori', 'Sekretaris Jenderal');
            @endphp

            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 gap-6 lg:gap-8 max-w-sm w-full">
                    @foreach ($sekjen as $unit)
                        <!-- {{ $unit->kategori }} -->
                        <div class="group">
                            <div
                                class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/img/unit-organisasi/' . $unit->logo) }}"
                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $unit->nama }}">
                                </div>
                                <div class="p-4 md:p-4">
                                    <h6 class="font-bold text-gray-800 text-sm md:text-base mb-3 uppercase tracking-wider">
                                        {{ $unit->nama }}
                                    </h6>
                                    <a href="{{ route('guest.profil.struktural.detail', $unit->id) }}"
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
            </div>

            <!-- Grid 2: Biro -->
            @php
                $biro = $unitOrganisasiList->where('kategori', 'Biro');
            @endphp

            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-3xl w-full">
                    @foreach ($biro as $unit)
                        <!-- {{ $unit->kategori }} -->
                        <div class="group">
                            <div
                                class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/img/unit-organisasi/' . $unit->logo) }}"
                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $unit->nama }}">
                                </div>
                                <div class="p-4 md:p-4">
                                    <h6 class="font-bold text-gray-800 text-sm md:text-base mb-3 uppercase tracking-wider">
                                        {{ $unit->nama }}
                                    </h6>
                                    <a href="{{ route('guest.profil.struktural.detail', $unit->id) }}"
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
            </div>

            <!-- Grid 3: Kementerian Koordinator -->
            @php
                $kemenkoor = $unitOrganisasiList->where('kategori', 'Kementerian Koordinator');
            @endphp

            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full">
                    @foreach ($kemenkoor as $unit)
                        <!-- {{ $unit->kategori }} -->
                        <div class="group">
                            <div
                                class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/img/unit-organisasi/' . $unit->logo) }}"
                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $unit->nama }}">
                                </div>
                                <div class="p-4 md:p-4">
                                    <h6 class="font-bold text-gray-800 text-sm md:text-base mb-3 uppercase tracking-wider">
                                        {{ $unit->nama }}
                                    </h6>
                                    <a href="{{ route('guest.profil.struktural.detail', $unit->id) }}"
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
            </div>

            <!-- Grid 3: Kementerian -->
            @php
                $kementerian = $unitOrganisasiList->where('kategori', 'Kementerian');
            @endphp

            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 w-full">
                    @foreach ($kementerian as $unit)
                        <!-- {{ $unit->kategori }} -->
                        <div class="group">
                            <div
                                class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 h-full relative">
                                <div class="relative overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/img/unit-organisasi/' . $unit->logo) }}"
                                        class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110"
                                        alt="{{ $unit->nama }}">
                                </div>
                                <div class="p-4 md:p-4">
                                    <h6 class="font-bold text-gray-800 text-sm md:text-base mb-3 uppercase tracking-wider">
                                        {{ $unit->nama }}
                                    </h6>
                                    <a href="{{ route('guest.profil.struktural.detail', $unit->id) }}"
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
