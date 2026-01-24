@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-16 min-h-screen">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Header -->
            <div class="text-center mb-6 mt-12">
                <div class="flex items-center justify-center gap-4 mb-4">
                    <div class="p-3 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl shadow-lg flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m17 2-5 5-5-5" />
                            <rect width="20" height="15" x="2" y="7" rx="2" />
                        </svg>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                        Media <span class="text-blue-600">Partner</span>
                    </h1>
                </div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Berikut adalah beberapa pilihan paket media partner yang disediakan oleh BEM KM UDINUS
                </p>
            </div>

            <!-- Package Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Media Partner Gratis -->
                <div
                    class="relative bg-white rounded-3xl border-2 border-blue-200 p-8 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-200/50 hover:-translate-y-2 group">
                    <!-- Popular Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                        <span
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Paling Populer
                        </span>
                    </div>

                    <!-- Header -->
                    <div class="text-center mb-6 mt-4">
                        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                            <span class="font-bold">GRATIS</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Media Partner Gratis</h3>
                        <p class="text-gray-600">Ideal untuk media kampus dan komunitas</p>
                    </div>

                    <!-- Price -->
                    <div class="text-center mb-6 py-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl">
                        <div class="text-5xl font-bold text-blue-600">Rp 0</div>
                        <div class="text-sm text-gray-600 mt-1">Per kegiatan</div>
                    </div>

                    <!-- Benefits -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Logo di Media Promosi</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Publikasi Konten Kegiatan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Sertifikat Digital</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Networking</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="{{ route('guest.partnership.media-partner.prosedur.index') }}"
                        class="block w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white text-center font-bold py-4 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl group-hover:scale-105">
                        Informasi Lebih Lanjut >
                    </a>
                </div>

                <!-- Media Partner Berbayar -->
                <div
                    class="relative bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl border-2 border-purple-300 p-8 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-300/50 hover:-translate-y-2 group">
                    <!-- Premium Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                        <span
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            Premium Package
                        </span>
                    </div>

                    <!-- Header -->
                    <div class="text-center mb-6 mt-4">
                        <div
                            class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 px-4 py-2 rounded-full mb-4">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-bold">PREMIUM</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Media Partner Berbayar</h3>
                        <p class="text-gray-600">Untuk media profesional dengan benefit maksimal</p>
                    </div>

                    <!-- Price -->
                    <div class="text-center mb-6 py-4 bg-white rounded-2xl shadow-sm">
                        <div class="text-sm text-gray-600 mb-1">Mulai dari</div>
                        <div
                            class="text-5xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                            Rp 500K</div>
                        <div class="text-sm text-gray-600 mt-1">Dapat disesuaikan</div>
                    </div>

                    <!-- Benefits -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Semua Benefit Gratis</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Logo Premium Placement</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Dedicated Social Media Post</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Press Release Prioritas</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Plakat & Sertifikat Fisik</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Dokumentasi Eksklusif</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="{{ route('guest.partnership.media-partner.prosedur.index') }}"
                        class="block w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white text-center font-bold py-4 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl group-hover:scale-105">
                        Informasi Lebih Lanjut >
                    </a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-16 max-w-4xl mx-auto">
                <div
                    class="bg-gradient-to-r from-blue-50 via-indigo-50 to-purple-50 rounded-2xl p-8 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="shrink-0">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Informasi Tambahan</h3>
                            <p class="text-gray-600 mb-4">
                                Untuk media partner berbayar, harga dapat disesuaikan berdasarkan skala kegiatan dan cakupan
                                publikasi yang diinginkan. Tim kami akan dengan senang hati mendiskusikan paket kemitraan
                                yang sesuai dengan kebutuhan Anda.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('guest.kontak.index') }}"
                                    class="inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-blue-600 font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-sm hover:shadow-md">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    Konsultasi Gratis
                                </a>
                                <a href="{{ route('guest.partnership.index') }}"
                                    class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-gray-700 font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-sm hover:shadow-md">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                    Kembali ke Partnership
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
