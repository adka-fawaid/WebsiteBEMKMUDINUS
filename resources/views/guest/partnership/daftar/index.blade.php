@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto px-4 md:px-6 max-w-[1600px]">
            <!-- Header -->
            <div class="text-center mt-5 mb-4 md:mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span
                        class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Pendaftaran Partnership {{ ucwords(str_replace('-', ' ', $kategori)) }}
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto inline">
                    Silakan isi formulir di bawah ini untuk mendaftar sebagai mitra
                    {{ ucwords(str_replace('-', ' ', $kategori)) }} bersama kami.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-6 max-w-5xl">

            <div class="bg-white shadow-md rounded-lg p-6 md:p-8 overflow-hidden">
                <form action="{{ route('guest.partnership.daftar.store', $kategori) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- SOP Button -->
                    <div class="mb-6">
                        <a href="{{ asset('docs/SOP-PARTNERSHIP-BEMKM.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-4 px-6 py-4 bg-white border-2 border-blue-200 hover:border-blue-400 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div
                                class="flex items-center justify-center w-12 h-12 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 mb-0.5">Baca Terlebih Dahulu</p>
                                <p class="font-semibold text-gray-800 group-hover:text-blue-700 transition-colors">SOP
                                    Partnership
                                    BEM KM UDINUS</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    @if ($kategori === 'media-partner')
                        @include('guest.partnership.daftar.kategori.media-partner')
                    @elseif($kategori === 'sponsorship')
                        @include('guest.partnership.daftar.kategori.sponsorship')
                    @elseif($kategori === 'kolaborasi')
                        @include('guest.partnership.daftar.kategori.kolaborasi')
                    @elseif($kategori === 'kampus-visit')
                        @include('guest.partnership.daftar.kategori.kampus-visit')
                    @elseif($kategori === 'delegasi')
                        @include('guest.partnership.daftar.kategori.delegasi')
                    @endif

                    <div class="mt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <!-- Button Kembali ke Prosedur -->
                        @if ($kategori === 'media-partner')
                            <a href="{{ route('guest.partnership.media-partner.index') }}"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-gray-300 hover:border-blue-500 text-gray-700 hover:text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Kembali ke Prosedur</span>
                            </a>
                        @else
                            <a href="{{ route('guest.partnership.prosedur.index', $kategori) }}"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-gray-300 hover:border-blue-500 text-gray-700 hover:text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                <span>Kembali ke Prosedur</span>
                            </a>
                        @endif

                        <!-- Button Kirim -->
                        <button type="submit"
                            class="w-full sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <span class="flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Kirim Pendaftaran
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
