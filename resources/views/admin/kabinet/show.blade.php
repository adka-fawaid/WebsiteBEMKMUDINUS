<!-- Modal Show Detail Kabinet -->
<div id="show-modal-{{ $kabinet->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="relative p-4 w-full max-w-3xl h-full flex items-center justify-center">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-h-[90vh] flex flex-col">
            <!-- Modal header -->
            <div
                class="relative p-6 md:p-7 bg-gradient-to-br from-blue-600 via-blue-500 to-indigo-600 overflow-hidden flex-shrink-0">
                <!-- Background decoration -->
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
                                <path
                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-blue-100 uppercase tracking-wider mb-1">Detail
                                Informasi</p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">
                                Kabinet BEM KM UDINUS
                            </h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="show-modal-{{ $kabinet->id }}">
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
            <div class="p-4 md:p-6 space-y-6 overflow-y-auto flex-1">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Foto Kabinet -->
                    <div class="md:col-span-1 flex justify-center">
                        <div class="relative">
                            <img src="{{ asset('storage/img/kabinet/' . $kabinet->logo) }}" alt="{{ $kabinet->nama }}"
                                class="w-64 h-64 object-cover rounded-lg shadow-lg border-4 border-purple-100">
                        </div>
                    </div>

                    <!-- Detail Info -->
                    <div class="md:col-span-2 space-y-3">
                        <!-- Nama Kabinet -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                        <polyline points="9 22 9 12 15 12 15 22" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nama
                                        Kabinet</p>
                                    <p class="text-lg font-bold text-gray-900">{{ $kabinet->nama }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Periode -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                        <line x1="16" y1="2" x2="16" y2="6" />
                                        <line x1="8" y1="2" x2="8" y2="6" />
                                        <line x1="3" y1="10" x2="21" y2="10" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Periode
                                    </p>
                                    <p class="text-lg font-bold text-gray-900">{{ $kabinet->periode }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                    <div class="flex items-center gap-3 mb-5 pb-4 border-b border-gray-100">
                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Deskripsi Kabinet</p>
                            <p class="text-sm text-gray-600">Informasi tentang Kabinet BEM KM UDINUS</p>
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="absolute top-0 left-0 w-8 h-8 text-blue-100 -translate-x-1 -translate-y-1"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <div class="pl-6 pr-6">
                            <p class="text-gray-700 leading-relaxed text-justify whitespace-pre-line">
                                {{ $kabinet->deskripsi }}</p>
                        </div>
                        <svg class="absolute bottom-0 right-0 w-8 h-8 text-blue-100 translate-x-1 translate-y-1 rotate-180"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 flex-shrink-0">
                <button data-modal-hide="show-modal-{{ $kabinet->id }}" type="button"
                    class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-150">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
