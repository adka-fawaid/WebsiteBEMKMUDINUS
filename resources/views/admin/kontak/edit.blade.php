<!-- Edit Modal -->
<div id="edit-kontak-modal-{{ $kontak->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full flex items-center justify-center">
        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-h-[90vh] flex flex-col">
            <!-- Modal header -->
            <div
                class="relative p-6 md:p-7 bg-gradient-to-br from-yellow-600 via-yellow-500 to-amber-600 overflow-hidden flex-shrink-0">
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
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-yellow-100 uppercase tracking-wider mb-1">Edit Data</p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Edit Kontak</h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="edit-kontak-modal-{{ $kontak->id }}">
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
            <form action="{{ route('admin.kontak.update', $kontak->id) }}" method="POST"
                class="flex-1 flex flex-col overflow-hidden">
                @csrf
                @method('PUT')

                <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4">
                    <!-- Tipe -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
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
                                <label for="tipe-{{ $kontak->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Tipe
                                    Kontak</label>
                                <input type="text" id="tipe-{{ $kontak->id }}" name="tipe"
                                    value="{{ $kontak->tipe }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Contoh: Email, Telepon, Instagram, dll..." required>
                            </div>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="kontak-{{ $kontak->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Kontak</label>
                                <input type="text" id="kontak-{{ $kontak->id }}" name="kontak"
                                    value="{{ $kontak->kontak }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Contoh: email@example.com, +62 812-xxxx-xxxx, @username..." required>
                            </div>
                        </div>
                    </div>

                    <!-- Nama -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="nama-{{ $kontak->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Nama /
                                    Label</label>
                                <input type="text" id="nama-{{ $kontak->id }}" name="nama"
                                    value="{{ $kontak->nama }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Contoh: BEMKM Udinus, Instagram BEMKM, dll...">
                                <p class="text-xs text-gray-500 mt-1">nama tampilan untuk kontak</p>
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
                                <label for="url-{{ $kontak->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">URL /
                                    Link</label>
                                <input type="url" id="url-{{ $kontak->id }}" name="url"
                                    value="{{ $kontak->url }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Contoh: https://instagram.com/username">
                                <p class="text-xs text-gray-500 mt-1">link yang bisa diklik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                    <button type="button" data-modal-hide="edit-kontak-modal-{{ $kontak->id }}"
                        class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-200 hover:shadow-md">
                        Batal
                    </button>
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-yellow-600 to-amber-600 hover:from-yellow-700 hover:to-amber-700 font-semibold rounded-lg text-sm px-6 py-2.5 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
