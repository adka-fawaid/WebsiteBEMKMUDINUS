@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">

            <!-- Header Section -->
            <div class="text-center mt-5 mb-5 md:mb-6">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span
                        class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Media Partner
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Pilih paket yang sesuai dengan kebutuhan publikasi acara Anda
                </p>
            </div>

            <!-- Cards Container -->
            <div class="grid lg:grid-cols-2 gap-8 max-w-6xl mx-auto mb-16">

                <!-- FREE PACKAGE CARD -->
                <div class="group relative">
                    <!-- Glow Effect Background -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-[2rem] opacity-0 group-hover:opacity-20 blur-xl transition-all duration-700">
                    </div>

                    <!-- Main Card -->
                    <div
                        class="relative bg-white rounded-[2rem] p-10 shadow-xl shadow-blue-100/50 border border-gray-100 hover:border-blue-200 transition-all duration-500 hover:-translate-y-2">

                        <!-- Decorative Corner Element -->
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-transparent rounded-bl-[5rem] rounded-tr-[2rem]">
                        </div>

                        <!-- Header -->
                        <div class="relative mb-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200/50 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                        </svg>
                                    </div>
                                </div>
                                <span
                                    class="bg-emerald-50 text-emerald-600 text-xs font-bold px-4 py-2 rounded-full border border-emerald-200">
                                    FREE
                                </span>
                            </div>

                            <h3 class="text-3xl font-black text-gray-900 mb-3">
                                Media Partner Gratis
                            </h3>
                            <p class="text-gray-500 text-base leading-relaxed">
                                Publikasi dasar untuk meningkatkan awareness acara Anda di kalangan mahasiswa Udinus
                            </p>
                        </div>

                        <!-- CTA Button -->
                        <a href="{{ route('guest.partnership.media-partner.prosedur.index', ['kategori' => 'gratis']) }}"
                            class="group/btn flex items-center justify-center gap-2 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-blue-500/50">
                            <span>Lihat Prosedur Lengkap</span>
                            <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- PREMIUM PACKAGE CARD -->
                <div class="group relative">
                    <!-- Premium Glow Effect -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-500 rounded-[2rem] opacity-30 group-hover:opacity-50 blur-2xl transition-all duration-700">
                    </div>

                    <!-- Main Card -->
                    <div
                        class="relative bg-gradient-to-br from-white via-purple-50/30 to-indigo-50/30 rounded-[2rem] p-10 shadow-2xl shadow-purple-200/60 border-2 border-purple-200/50 hover:border-purple-300 transition-all duration-500 hover:-translate-y-3 overflow-hidden">

                        <!-- Premium Badge Corner -->
                        <div class="absolute top-0 right-0">
                            <div class="relative">
                                <div
                                    class="w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-500 rounded-bl-[5rem] rounded-tr-[2rem]">
                                </div>
                                <div class="absolute top-4 right-4 transform rotate-12">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Header -->
                        <div class="relative mb-8">
                            <div class="flex items-start justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center shadow-xl shadow-purple-300/50 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <span
                                        class="bg-gradient-to-r from-amber-400 to-orange-500 text-white text-xs font-black px-4 py-2 rounded-full shadow-lg">
                                        PREMIUM
                                    </span>
                                </div>
                            </div>

                            <h3 class="text-3xl font-black text-gray-900 mb-3">
                                Media Partner <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Berbayar</span>
                            </h3>
                            <p class="text-gray-600 text-base leading-relaxed font-medium">
                                Paket eksklusif dengan publikasi posting feed untuk jangkauan maksimal
                            </p>
                        </div>

                        <!-- Premium CTA Button -->
                        <a href="{{ route('guest.partnership.media-partner.prosedur.index', ['kategori' => 'berbayar']) }}"
                            class="relative group/btn flex items-center justify-center gap-2 w-full bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 bg-[length:200%_auto] hover:bg-right text-white font-bold py-4 px-6 rounded-xl transition-all duration-500 shadow-xl shadow-purple-400/40 hover:shadow-2xl hover:shadow-purple-400/60 hover:scale-[1.02]">
                            <span class="relative z-10">Lihat Prosedur Lengkap</span>
                            <svg class="w-5 h-5 relative z-10 group-hover/btn:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <!-- Shimmer Effect -->
                            <div
                                class="absolute inset-0 rounded-xl bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover/btn:animate-shimmer">
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Info Section -->
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-start gap-5">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Butuh Informasi Lebih Lanjut?</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Silakan hubungi kami untuk informasi lebih detail mengenai paket media partner dan
                                persyaratan yang dibutuhkan.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('guest.kontak.index') }}"
                                    class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Hubungi Kami
                                </a>
                                <a href="{{ route('guest.partnership.index') }}"
                                    class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-3 rounded-xl transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }

        .animate-shimmer {
            animation: shimmer 2s infinite;
        }
    </style>
@endsection
