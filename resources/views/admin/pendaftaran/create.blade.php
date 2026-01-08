<!-- Add Pendaftaran Modal -->
<div id="add-pendaftaran-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full flex items-center justify-center">
        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-h-[90vh] flex flex-col">
            <!-- Modal header -->
            <div
                class="relative p-6 md:p-7 bg-gradient-to-br from-green-600 via-green-500 to-emerald-600 overflow-hidden flex-shrink-0">
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
                                <path d="M12 5v14" />
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-green-100 uppercase tracking-wider mb-1">Tambah Data
                            </p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Pendaftaran Baru</h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="add-pendaftaran-modal">
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
            <form action="{{ route('admin.pendaftaran.store') }}" method="POST" enctype="multipart/form-data"
                class="flex-1 flex flex-col overflow-hidden">
                @csrf

                <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4">
                    <!-- Program Kerja Id -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path
                                        d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z" />
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="program_kerja_id"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Program
                                    Kerja</label>
                                <select id="program_kerja_id" name="program_kerja_id"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    required>
                                    <option value="">Pilih Program Kerja</option>
                                    @forelse ($programKerjas as $programKerja)
                                        <option value="{{ $programKerja->id }}">
                                            {{ $programKerja->nama }}
                                        </option>
                                    @empty
                                        <option value="" disabled>Belum ada Program Kerja tersedia</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Judul -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                <!-- Lucide Type Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-type text-white">
                                    <polyline points="4 7 4 4 20 4 20 7" />
                                    <line x1="9" x2="15" y1="20" y2="20" />
                                    <line x1="12" x2="12" y1="4" y2="20" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="judul"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Judul
                                    Pendaftaran</label>
                                <input type="text" id="judul" name="judul"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan judul pendaftaran..." required>
                            </div>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Tanggal Buka -->
                        <div
                            class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2" />
                                        <line x1="16" y1="2" x2="16" y2="6" />
                                        <line x1="8" y1="2" x2="8" y2="6" />
                                        <line x1="3" y1="10" x2="21" y2="10" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label for="tanggal_buka"
                                        class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Tanggal
                                        Buka</label>
                                    <input type="date" id="tanggal_buka" name="tanggal_buka"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                        required>
                                </div>
                            </div>
                        </div>

                        <!-- Tanggal Tutup -->
                        <div
                            class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2" />
                                        <line x1="16" y1="2" x2="16" y2="6" />
                                        <line x1="8" y1="2" x2="8" y2="6" />
                                        <line x1="3" y1="10" x2="21" y2="10" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <label for="tanggal_tutup"
                                        class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Tanggal
                                        Tutup</label>
                                    <input type="date" id="tanggal_tutup" name="tanggal_tutup"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                        required>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                    <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="deskripsi"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" rows="6"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                                    placeholder="Masukkan deskripsi pendaftaran..." required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                    <button type="button" data-modal-hide="add-pendaftaran-modal"
                        class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-200 hover:shadow-md">
                        Batal
                    </button>
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-6 py-2.5 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Tambah Pendaftaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImageCreate(event) {
        const input = event.target;
        const preview = document.getElementById('preview-img-create');
        const imagePreview = document.getElementById('image-preview-create');
        const noPreview = document.getElementById('no-preview-create');
        const fileName = document.getElementById('file-name-create');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                noPreview.classList.add('hidden');
            }

            reader.readAsDataURL(input.files[0]);
            fileName.textContent = 'File dipilih: ' + input.files[0].name;
        } else {
            imagePreview.classList.add('hidden');
            noPreview.classList.remove('hidden');
            fileName.textContent = '';
        }
    }
</script>
