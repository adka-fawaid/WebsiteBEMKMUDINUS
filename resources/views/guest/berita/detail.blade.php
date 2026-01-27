@extends('guest.components.layout')

@section('content')
    <!-- Detail Berita -->
    <section id="detail-berita"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-orange-50/30 py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-2 sm:px-3 lg:px-4 max-w-7xl relative z-10">
            <!-- Main Content -->
            <div class="space-y-4 md:space-y-5 lg:space-y-6">

                <!-- Title & Category -->
                <div class="text-center">
                    <h1
                        class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-2xl md:text-3xl lg:text-4xl mt-4 mb-4">
                        {{ $berita->judul }}
                    </h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                    <div
                        class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold px-5 py-2.5 rounded-xl leading-tight text-sm shadow-xl shadow-orange-500/50 mb-2">
                        {{ $berita->kategori }}
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="max-w-4xl mx-auto">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl bg-gray-50">
                        <img src="{{ asset('storage/img/berita/' . $berita->gambar) }}"
                            class="w-full h-auto max-h-[600px] object-contain mx-auto" alt="{{ $berita->judul }}">
                    </div>
                </div>

                <!-- Meta Information -->
                <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6">
                    <!-- Publish Date -->
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-medium">{{ $berita->created_at->format('d F Y') }}</span>
                    </div>

                    <!-- Updated Date -->
                    @if ($berita->created_at != $berita->updated_at)
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            <span class="text-sm font-medium">Diperbarui:
                                {{ $berita->updated_at->locale('id')->translatedFormat('d F Y') }}</span>
                        </div>
                    @endif
                </div>

                <!-- Description Content -->
                <div class="mx-auto px-2">
                    <div class="text-gray-700 text-base md:text-lg leading-relaxed whitespace-pre-line">
                        {{ $berita->deskripsi }}
                    </div>
                </div>

                <!-- Attachments Section -->
                @if ($berita->dokumen || $berita->url)
                    <div class="max-w-7xl mx-auto">
                        <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                </path>
                            </svg>
                            <span>Lampiran & Tautan</span>
                        </h3>

                        <div class="max-w-3xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Document -->
                                @if ($berita->dokumen)
                                    <a href="{{ asset('storage/dokumen/berita/' . $berita->dokumen) }}" target="_blank"
                                        class="group flex items-center gap-3 p-4 bg-blue-50 hover:bg-blue-100 border-2 border-blue-200 rounded-xl transition-all duration-300 hover:shadow-lg">
                                        <div
                                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-blue-700 mb-0.5">Lihat Dokumen</p>
                                            <p class="text-xs text-blue-600 truncate">{{ $berita->dokumen }}</p>
                                        </div>
                                        <svg class="w-5 h-5 text-blue-500 group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                @endif

                                <!-- External URL -->
                                @if ($berita->url)
                                    <a href="{{ $berita->url }}" target="_blank" rel="noopener noreferrer"
                                        class="group flex items-center gap-3 p-4 bg-orange-50 hover:bg-orange-100 border-2 border-orange-200 rounded-xl transition-all duration-300 hover:shadow-lg">
                                        <div
                                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-orange-700 mb-0.5">Tautan External</p>
                                            <p class="text-xs text-orange-600 truncate">{{ $berita->url }}</p>
                                        </div>
                                        <svg class="w-5 h-5 text-orange-500 group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Decorative Divider -->
            <div class="flex items-center justify-center mt-12 md:mt-16">
                <div class="flex-1 h-px bg-gradient-to-r from-transparent to-blue-500 max-w-xs"></div>
                <div class="w-4 h-4 mx-4 bg-blue-500 rotate-45 transform origin-center"></div>
                <div class="flex-1 h-px bg-gradient-to-l from-transparent to-blue-500 max-w-xs"></div>
            </div>
        </div>
    </section>
    <!-- Detail Berita -->
@endsection
