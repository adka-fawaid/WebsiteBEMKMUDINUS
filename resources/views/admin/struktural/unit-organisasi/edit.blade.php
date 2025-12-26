<!-- Edit Anggota Modal -->
<div id="edit-anggota-modal-{{ $anggota->id }}" tabindex="-1" aria-hidden="true"
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
                                <path
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-blue-100 uppercase tracking-wider mb-1">Edit Data</p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Edit Anggota</h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="edit-anggota-modal-{{ $anggota->id }}">
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
            <form
                action="{{ route('admin.struktural.unit-organisasi.anggota.update', [$anggota->unit_organisasi_id, $anggota->id]) }}"
                method="POST" enctype="multipart/form-data" class="flex-1 flex flex-col overflow-hidden">
                @csrf
                @method('PUT')

                <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4">
                    <!-- Foto Upload -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <circle cx="9" cy="9" r="2" />
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                                </svg>
                            </div>
                            <div>
                                <label class="text-sm font-bold text-gray-900">Foto Anggota</label>
                                <p class="text-xs text-gray-500">Upload foto baru (max 5MB)</p>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4 items-start">
                            <!-- Current Photo Preview -->
                            <div class="flex-shrink-0">
                                @if ($anggota->foto)
                                    <img id="current-foto-{{ $anggota->id }}"
                                        src="{{ asset('storage/img/anggota-unit/' . $anggota->foto) }}"
                                        alt="{{ $anggota->nama }}"
                                        class="w-40 h-40 object-cover rounded-xl shadow-md border-2 border-gray-200">
                                @else
                                    <div id="current-foto-{{ $anggota->id }}"
                                        class="w-40 h-40 rounded-xl bg-gray-100 flex items-center justify-center border-2 border-gray-200">
                                        <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                @endif
                                <div id="edit-image-preview-anggota-{{ $anggota->id }}" class="hidden">
                                    <img id="edit-preview-img-anggota-{{ $anggota->id }}" src="" alt="Preview"
                                        class="w-40 h-40 object-cover rounded-xl shadow-md border-2 border-gray-200">
                                </div>
                            </div>

                            <!-- Upload Area -->
                            <div class="flex-1">
                                <div
                                    class="relative border-2 border-dashed border-gray-300 rounded-xl p-6 hover:border-blue-400 transition-colors duration-300">
                                    <input type="file" id="foto-anggota-{{ $anggota->id }}" name="foto"
                                        accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                        onchange="previewEditImageAnggota{{ $anggota->id }}(event)">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                            fill="none" viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-2 text-sm text-gray-600">
                                            <span class="font-semibold text-blue-600">Klik untuk upload</span>
                                            atau drag and drop
                                        </p>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF, SVG hingga 5MB</p>
                                    </div>
                                </div>
                                <p class="mt-2 text-xs text-gray-500" id="file-name-anggota-{{ $anggota->id }}"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Nama -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="nama-{{ $anggota->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="nama-{{ $anggota->id }}" name="nama"
                                    value="{{ $anggota->nama }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan nama lengkap..." required>
                            </div>
                        </div>
                    </div>

                    <!-- NIM -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="nim-{{ $anggota->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">NIM</label>
                                <input type="text" id="nim-{{ $anggota->id }}" name="nim"
                                    value="{{ $anggota->nim }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan NIM...">
                            </div>
                        </div>
                    </div>

                    <!-- Program Studi -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                    <path d="M6 12v5c3 3 9 3 12 0v-5" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="program_studi-{{ $anggota->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Program
                                    Studi</label>
                                <input type="text" id="program_studi-{{ $anggota->id }}" name="program_studi"
                                    value="{{ $anggota->program_studi }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan program studi...">
                            </div>
                        </div>
                    </div>

                    <!-- Angkatan -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center shadow-sm">
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
                                <label for="angkatan-{{ $anggota->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Angkatan</label>
                                <input type="text" id="angkatan-{{ $anggota->id }}" name="angkatan"
                                    value="{{ $anggota->angkatan }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Contoh: 2024" pattern="[0-9]*" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                            </div>
                        </div>
                    </div>

                    <!-- Jabatan -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-rose-500 to-rose-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path
                                        d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z" />
                                    <path d="M5 21h14" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="jabatan-{{ $anggota->id }}"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Jabatan</label>
                                <input type="text" id="jabatan-{{ $anggota->id }}" name="jabatan"
                                    value="{{ $anggota->jabatan }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan jabatan..." required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                    <button type="button" data-modal-hide="edit-anggota-modal-{{ $anggota->id }}"
                        class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-200 hover:shadow-md">
                        Batal
                    </button>
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 font-semibold rounded-lg text-sm px-6 py-2.5 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewEditImageAnggota{{ $anggota->id }}(event) {
        const input = event.target;
        const preview = document.getElementById('edit-preview-img-anggota-{{ $anggota->id }}');
        const imagePreview = document.getElementById('edit-image-preview-anggota-{{ $anggota->id }}');
        const currentFoto = document.getElementById('current-foto-{{ $anggota->id }}');
        const fileName = document.getElementById('file-name-anggota-{{ $anggota->id }}');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                if (currentFoto) {
                    currentFoto.classList.add('hidden');
                }
            }

            reader.readAsDataURL(input.files[0]);
            fileName.textContent = 'File dipilih: ' + input.files[0].name;
        } else {
            imagePreview.classList.add('hidden');
            if (currentFoto) {
                currentFoto.classList.remove('hidden');
            }
            fileName.textContent = '';
        }
    }
</script>
