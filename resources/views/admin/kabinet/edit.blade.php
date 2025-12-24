<!-- Modal Edit Kabinet -->
<div id="edit-modal-{{ $kabinet->id }}" tabindex="-1" aria-hidden="true"
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
                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-blue-100 uppercase tracking-wider mb-1">Edit Data</p>
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">
                                Kabinet BEM KM UDINUS
                            </h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="edit-modal-{{ $kabinet->id }}">
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
            <form id="form-edit-kabinet-{{ $kabinet->id }}" action="{{ route('admin.kabinet.update', $kabinet->id) }}"
                method="POST" enctype="multipart/form-data" class="flex-1 flex flex-col overflow-hidden">
                @csrf
                @method('PUT')

                <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-6">
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Upload Foto -->
                        <div>
                            <div
                                class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                <div class="flex items-center gap-3 mb-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                            <rect x="3" y="3" width="18" height="18" rx="2"
                                                ry="2" />
                                            <circle cx="9" cy="9" r="2" />
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                                        </svg>
                                    </div>
                                    <div>
                                        <label class="text-sm font-bold text-gray-900">Logo Kabinet</label>
                                        <p class="text-xs text-gray-500">Upload logo baru (max 5MB)</p>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row gap-4 items-start">
                                    <!-- Current Photo Preview -->
                                    <div class="flex-shrink-0">
                                        <img id="current-photo-kabinet"
                                            src="{{ asset('storage/img/kabinet/' . $kabinet->logo) }}"
                                            alt="Current Photo"
                                            class="w-40 h-40 object-cover rounded-xl shadow-md border-2 border-gray-200">
                                    </div>

                                    <!-- Upload Area -->
                                    <div class="flex-1">
                                        <div
                                            class="relative border-2 border-dashed border-gray-300 rounded-xl p-6 hover:border-blue-400 transition-colors duration-300">
                                            <input type="file" id="foto-kabinet" name="logo" accept="image/*"
                                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                                onchange="previewImageKabinet(event)">
                                            <div class="text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <p class="mt-2 text-sm text-gray-600">
                                                    <span class="font-semibold text-blue-600">Klik untuk upload</span>
                                                    atau drag and drop
                                                </p>
                                                <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 5MB</p>
                                            </div>
                                        </div>
                                        <p class="mt-2 text-xs text-gray-500" id="file-name-kabinet"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nama Kabinet -->
                        <div>
                            <div
                                class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                            <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                                            <circle cx="12" cy="11" r="4" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <label for="nama_kabinet"
                                            class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Nama
                                            Kabinet</label>
                                        <input type="text" id="nama_kabinet" name="nama"
                                            value="{{ old('nama', $kabinet->nama) }}"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Periode -->
                        <div>
                            <div
                                class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-white">
                                            <rect x="3" y="4" width="18" height="18" rx="2"
                                                ry="2" />
                                            <line x1="16" y1="2" x2="16" y2="6" />
                                            <line x1="8" y1="2" x2="8" y2="6" />
                                            <line x1="3" y1="10" x2="21" y2="10" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <label for="periode"
                                            class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Periode</label>
                                        <div class="flex items-center gap-2">
                                            <input type="text" id="periode_awal"
                                                value="{{ old('periode_awal', explode('/', $kabinet->periode)[0] ?? '') }}"
                                                placeholder="2025" maxlength="4" pattern="[0-9]{4}"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-center"
                                                required>
                                            <span class="text-2xl font-bold text-gray-400">/</span>
                                            <input type="text" id="periode_akhir"
                                                value="{{ old('periode_akhir', explode('/', $kabinet->periode)[1] ?? '') }}"
                                                placeholder="2026" maxlength="4" pattern="[0-9]{4}"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-center"
                                                required>
                                        </div>
                                        <!-- Hidden input yang akan dikirim ke controller -->
                                        <input type="hidden" name="periode" id="periode_hidden"
                                            value="{{ old('periode', $kabinet->periode) }}">
                                        <p class="mt-1 text-xs text-gray-500">Contoh: 2025 / 2026z</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <div
                                class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-white">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <label for="deskripsi"
                                            class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Deskripsi
                                            Kabinet</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="8"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                                            required>{{ old('deskripsi', $kabinet->deskripsi) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end gap-3 p-4 md:p-5 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                    <button type="button" data-modal-hide="edit-modal-{{ $kabinet->id }}"
                        class="text-gray-700 bg-white hover:bg-gray-100 border border-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        Batal
                    </button>
                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200 shadow-md hover:shadow-lg">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImageKabinet(event) {
        const input = event.target;
        const preview = document.getElementById('current-photo-kabinet');
        const fileName = document.getElementById('file-name-kabinet');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
            fileName.textContent = 'File dipilih: ' + input.files[0].name;
        }
    }

    // Combine periode fields before form submit
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('form-edit-kabinet-{{ $kabinet->id }}');

        if (form) {
            form.addEventListener('submit', function(e) {
                const periodeAwal = document.getElementById('periode_awal').value;
                const periodeAkhir = document.getElementById('periode_akhir').value;
                const periodeHidden = document.getElementById('periode_hidden');

                // Gabungkan nilai dengan format "2024/2025"
                periodeHidden.value = periodeAwal + '/' + periodeAkhir;

                console.log('Periode yang dikirim:', periodeHidden.value); // Untuk debugging
            });
        }
    });
</script>
