<!-- Show Modal -->
<div id="show-berita-modal-{{ $berita->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full flex items-center justify-center">
        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-h-[90vh] flex flex-col">
            <!-- Modal header -->
            <div
                class="relative p-6 md:p-7 bg-gradient-to-br from-blue-600 via-blue-500 to-indigo-600 overflow-hidden flex-shrink-0">
                <div
                    class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtNC40MTggMy41ODItOCA4LThzOCAzLjU4MiA4IDgtMy41ODIgOC04IDgtOC0zLjU4Mi04LTh6bS0yOCAwYzAtNC40MTggMy41ODItOCA4LThzOCAzLjU4MiA4IDgtMy41ODIgOC04IDgtOC0zLjU4Mi04LTh6TTggNDhjMC00LjQxOCAzLjU4Mi04IDgtOHM4IDMuNTgyIDggOC0zLjU4MiA4LTggOC04LTMuNTgyLTgtOHptMjggMGMwLTQuNDE4IDMuNTgyLTggOC04czggMy41ODIgOCA4LTMuNTgyIDgtOCA4LTgtMy41ODItOC04eiIvPjwvZz48L2c+PC9zdmc+')] opacity-30">
                </div>

                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center ring-2 ring-white/30 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-blue-100 uppercase tracking-wider mb-1">Detail Data
                            </p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Informasi Berita
                            </h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="show-berita-modal-{{ $berita->id }}">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>

            <!-- Modal body -->
            <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4">
                <!-- Gambar, Judul, dan Kategori -->
                <div
                    class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-4">
                        <!-- Gambar -->
                        @if ($berita->gambar)
                            <div class="flex-shrink-0 flex justify-center md:justify-start">
                                <img src="{{ asset('storage/img/berita/' . $berita->gambar) }}"
                                    alt="{{ $berita->judul }}"
                                    class="w-32 h-32 object-cover rounded-xl border-4 border-blue-100 shadow-lg">
                            </div>
                        @else
                            <div class="flex-shrink-0 flex justify-center md:justify-start">
                                <div
                                    class="w-32 h-32 rounded-xl bg-gray-100 flex items-center justify-center border-4 border-gray-200">
                                    <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        @endif

                        <!-- Judul dan Kategori -->
                        <div class="flex-1 space-y-4">
                            <!-- Judul -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path
                                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                                        <path d="M18 14h-8" />
                                        <path d="M15 18h-5" />
                                        <path d="M10 6h8v4h-8V6Z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Judul
                                        Berita</label>
                                    <p class="text-base font-semibold text-gray-900">{{ $berita->judul }}</p>
                                </div>
                            </div>

                            <!-- Kategori -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M3 5h.01" />
                                        <path d="M3 12h.01" />
                                        <path d="M3 19h.01" />
                                        <path d="M8 5h13" />
                                        <path d="M8 12h13" />
                                        <path d="M8 19h13" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Kategori</label>
                                    @if ($berita->kategori === 'Berita Acara')
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-red-100 text-red-700 border border-red-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1.5">
                                                <path
                                                    d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                                <polyline points="14 2 14 8 20 8" />
                                            </svg>
                                            Berita Acara
                                        </span>
                                    @elseif ($berita->kategori === 'Berita Kegiatan')
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-blue-100 text-blue-700 border border-blue-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1.5">
                                                <rect x="3" y="4" width="18" height="18" rx="2"
                                                    ry="2" />
                                                <line x1="16" y1="2" x2="16" y2="6" />
                                                <line x1="8" y1="2" x2="8" y2="6" />
                                                <line x1="3" y1="10" x2="21" y2="10" />
                                            </svg>
                                            Berita Kegiatan
                                        </span>
                                    @elseif ($berita->kategori === 'Press Release')
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-purple-100 text-purple-700 border border-purple-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1.5">
                                                <path
                                                    d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                                                <path d="M18 14h-8" />
                                                <path d="M15 18h-5" />
                                                <path d="M10 6h8v4h-8V6Z" />
                                            </svg>
                                            Press Release
                                        </span>
                                    @elseif ($berita->kategori === 'Informasi')
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-green-100 text-green-700 border border-green-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1.5">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M12 16v-4" />
                                                <path d="M12 8h.01" />
                                            </svg>
                                            Informasi
                                        </span>
                                    @elseif ($berita->kategori === 'Lain-lain')
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-gray-100 text-gray-700 border border-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1.5">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                                <circle cx="5" cy="12" r="1" />
                                            </svg>
                                            Lain-lain
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-bold bg-gray-100 text-gray-700 border border-gray-200">
                                            {{ $berita->kategori }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slug -->
                <div
                    class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <label
                                class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Slug</label>
                            <p class="text-base font-semibold text-gray-900">{{ $berita->slug }}</p>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex items-center gap-3 mb-5 pb-4 border-b border-gray-100">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Deskripsi Berita</p>
                            <p class="text-sm text-gray-600">Informasi tentang Berita</p>
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="absolute top-0 left-0 w-8 h-8 text-blue-100 -translate-x-1 -translate-y-1"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <div class="pl-6 pr-6">
                            <p class="text-gray-700 leading-relaxed text-justify whitespace-pre-line break-words">
                                {{ $berita->deskripsi }}</p>
                        </div>
                        <svg class="absolute bottom-0 right-0 w-8 h-8 text-blue-100 translate-x-1 translate-y-1 rotate-180"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                    </div>
                </div>

                <!-- Dokumen dan URL -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Dokumen -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label
                                    class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Dokumen</label>
                                @if ($berita->dokumen)
                                    <a href="{{ asset('storage/dokumen/berita/' . $berita->dokumen) }}"
                                        target="_blank"
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700 hover:bg-green-200 transition">
                                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Lihat Dokumen
                                    </a>
                                @else
                                    <span class="text-sm text-gray-500">Tidak ada dokumen</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- URL -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">URL
                                    Link</label>
                                @if ($berita->url)
                                    <a href="{{ $berita->url }}" target="_blank"
                                        class="text-sm text-blue-600 hover:text-blue-800 hover:underline break-all">
                                        {{ Str::limit($berita->url, 30) }}
                                    </a>
                                @else
                                    <span class="text-sm text-gray-500">Tidak ada URL</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div
                class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                <button type="button" data-modal-hide="show-berita-modal-{{ $berita->id }}"
                    class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
