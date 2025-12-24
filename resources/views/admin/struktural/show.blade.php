<!-- Show Modal -->
<div id="show-struktural-modal-{{ $item->id }}" tabindex="-1" aria-hidden="true"
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
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Informasi Struktural</h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="show-struktural-modal-{{ $item->id }}">
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
                <!-- Logo, Nama, dan Kategori -->
                <div
                    class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-4">
                        <!-- Logo -->
                        @if ($item->logo)
                            <div class="flex-shrink-0 flex justify-center md:justify-start">
                                <img src="{{ asset('storage/img/unit-organisasi/' . $item->logo) }}"
                                    alt="{{ $item->nama }}"
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

                        <!-- Nama dan Kategori -->
                        <div class="flex-1 space-y-4">
                            <!-- Nama -->
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M16 2v2" />
                                        <path d="M17.915 22a6 6 0 0 0-12 0" />
                                        <path d="M8 2v2" />
                                        <circle cx="12" cy="12" r="4" />
                                        <rect x="3" y="4" width="18" height="18" rx="2" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label
                                        class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nama
                                        Unit</label>
                                    <p class="text-base font-semibold text-gray-900">{{ $item->nama }}</p>
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
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                        @if ($item->kategori === 'Badan Pengurus Harian') bg-blue-100 text-blue-700
                                        @elseif($item->kategori === 'Biro') bg-indigo-100 text-indigo-700
                                        @else bg-purple-100 text-purple-700 @endif">
                                        {{ $item->kategori }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div
                    class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <label
                                class="block text-xs font-medium text-gray-500 uppercase tracking-wide mb-2">Deskripsi</label>
                            <div class="relative">
                                <div class="absolute top-0 left-0 text-blue-200 text-6xl leading-none font-serif">"
                                </div>
                                <p class="text-sm text-gray-700 leading-relaxed pl-8 pr-8 pt-4">{{ $item->deskripsi }}
                                </p>
                                <div class="absolute bottom-0 right-0 text-blue-200 text-6xl leading-none font-serif">
                                    "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div
                class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                <button type="button" data-modal-hide="show-struktural-modal-{{ $item->id }}"
                    class="text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 font-semibold rounded-lg text-sm px-6 py-2.5 transition-all duration-200 shadow-lg hover:shadow-xl">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
