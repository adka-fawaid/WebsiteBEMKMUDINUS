<!-- Modal Show Detail Media Partner -->
<div id="show-modal-{{ $medpart->id }}" tabindex="-1" aria-hidden="true"
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
                                Pendaftaran Media Partner
                            </h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="show-modal-{{ $medpart->id }}">
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
                <div class="space-y-4">
                    <!-- Nomor Pendaftaran -->
                    <div
                        class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z" />
                                    <polyline points="16 3 16 7 8 7 8 3" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nomor
                                    Pendaftaran</p>
                                <p class="text-base text-gray-900">{{ $medpart->nomor_pendaftaran }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <!-- Email -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="2" y="4" width="20" height="16" rx="2" />
                                        <path d="m22 7-10 5L2 7" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Email
                                    </p>
                                    <p class="text-base text-gray-900 break-all">{{ $medpart->email }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Nomor Telepon -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nomor
                                        Telepon</p>
                                    <p class="text-base text-gray-900">{{ $medpart->nomor_telepon }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nama Lengkap -->
                    <div
                        class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nama
                                    Lengkap</p>
                                <p class="text-base text-gray-900">{{ $medpart->nama_lengkap }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <!-- Nama Instansi -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-500 to-cyan-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="3" y="3" width="18" height="18" rx="2" />
                                        <path d="M3 9h18M9 3v18" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nama
                                        Instansi</p>
                                    <p class="text-base text-gray-900">{{ $medpart->nama_instansi }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Jenis Paket -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path
                                            d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4M9 2h6M3 6h18M6 6v14M18 6v14" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Jenis
                                        Paket</p>
                                    <p class="text-base text-gray-900">{{ $medpart->jenis_paket }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nama Acara -->
                    <div
                        class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-yellow-500 to-yellow-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M6 9h12M6 9a6 6 0 1 0 12 0M6 9v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V9" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Nama
                                    Acara</p>
                                <p class="text-base text-gray-900">{{ $medpart->nama_acara }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi Acara -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3 mb-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Deskripsi
                                    Acara</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-justify whitespace-pre-line pl-2">
                            {{ $medpart->deskripsi_acara }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <!-- Akun Tag -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Akun
                                        Tag</p>
                                    <p class="text-base text-gray-900 break-all">{{ $medpart->akun_tag }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Attachments Section -->
                    <div class="space-y-3 pt-4 border-t border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-700">File Dokumen</h4>

                        <!-- Proposal Acara -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Proposal
                                        Acara</p>
                                    <a href="{{ asset('storage/' . $medpart->proposal_acara) }}" target="_blank"
                                        class="text-blue-600 hover:text-blue-800 font-semibold truncate break-all inline-flex items-center gap-2">
                                        <span class="truncate">{{ basename($medpart->proposal_acara) }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            <polyline points="13 3 13 13 3 13" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Poster Acara -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="3" y="3" width="18" height="18" rx="2" />
                                        <circle cx="8.5" cy="8.5" r="1.5" />
                                        <polyline points="21 15 16 10 5 21" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Poster
                                        Acara</p>
                                    <div class="space-y-2">
                                        <div class="rounded-lg overflow-hidden border border-gray-200 max-w-xs">
                                            <img src="{{ asset('storage/img/poster-medpart/' . $medpart->poster_acara) }}"
                                                alt="Poster Acara" class="w-full h-auto object-cover">
                                        </div>
                                        <a href="{{ asset('storage/img/poster-medpart/' . $medpart->poster_acara) }}"
                                            target="_blank"
                                            class="text-blue-600 hover:text-blue-800 font-semibold truncate break-all inline-flex items-center gap-2">
                                            <span class="truncate">{{ basename($medpart->poster_acara) }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                                <polyline points="13 3 13 13 3 13" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bukti Follow -->
                        <div
                            class="group bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-medium text-gray-500 uppercase tracking-wide mb-1">Bukti
                                        Follow</p>
                                    <a href="{{ asset('storage/' . $medpart->bukti_follow) }}" target="_blank"
                                        class="text-blue-600 hover:text-blue-800 font-semibold truncate break-all inline-flex items-center gap-2">
                                        <span class="truncate">{{ basename($medpart->bukti_follow) }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            <polyline points="13 3 13 13 3 13" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 flex-shrink-0">
                <button data-modal-hide="show-modal-{{ $medpart->id }}" type="button"
                    class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
