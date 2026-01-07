<!-- Edit Pertanyaan Modal -->
<div id="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}" tabindex="-1" aria-hidden="true"
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
                            <h3 class="text-xl md:text-2xl font-bold text-white leading-tight">Edit Pertanyaan</h3>
                        </div>
                    </div>
                    <button type="button"
                        class="flex-shrink-0 text-white/90 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg text-sm w-10 h-10 inline-flex justify-center items-center transition-all duration-200 hover:scale-110"
                        data-modal-hide="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}">
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
                action="{{ route('admin.pendaftaran.formulir.pertanyaan.update', [$pendaftaran->id, $pertanyaanPendaftaran->id]) }}"
                method="POST" enctype="multipart/form-data" class="flex-1 flex flex-col overflow-hidden">
                @csrf
                @method('PUT')

                <div class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4">
                    <!-- Pertanyaan -->
                    <div
                        class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path
                                        d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719" />
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                    <path d="M12 17h.01" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label for="pertanyaan"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Pertanyaan</label>
                                <input type="text" id="pertanyaan" name="pertanyaan"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    placeholder="Masukkan pertanyaan..."
                                    value="{{ $pertanyaanPendaftaran->pertanyaan }}" required>
                            </div>
                        </div>
                    </div>

                    <!-- Tipe Jawaban -->
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
                                <label for="tipe_jawaban"
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Tipe
                                    Jawaban</label>
                                <select id="tipe_jawaban_edit_{{ $pertanyaanPendaftaran->id }}" name="tipe_jawaban"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                    required
                                    onchange="toggleOpsiJawabanEdit(this.value, {{ $pertanyaanPendaftaran->id }})">
                                    <option value="">Pilih Tipe Jawaban</option>
                                    <option value="Jawaban Panjang" @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Jawaban Panjang') selected @endif>
                                        Jawaban Panjang</option>
                                    <option value="Jawaban Singkat" @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Jawaban Singkat') selected @endif>
                                        Jawaban Singkat</option>
                                    <option value="Opsi" @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Opsi') selected @endif>Opsi
                                    </option>
                                    <option value="File" @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'File') selected @endif>File
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Opsi Jawaban (jika Tipe Jawaban adalah Opsi) -->
                    <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100"
                        id="opsi-jawaban-container-edit-{{ $pertanyaanPendaftaran->id }}"
                        style="display: {{ old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Opsi' ? '' : 'none' }};">
                        <div class="flex items-start gap-3">
                            <div
                                class="flex-shrink-0 w-10 h-10 rounded-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="12" r="1" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <label
                                    class="block text-xs font-medium text-gray-900 uppercase tracking-wide mb-2">Opsi
                                    Jawaban</label>
                                <div id="opsi-jawaban-list-edit-{{ $pertanyaanPendaftaran->id }}">
                                    @php
                                        $oldOpsi = old(
                                            'opsi_jawaban',
                                            isset($pertanyaanPendaftaran->tipe_jawaban) &&
                                            $pertanyaanPendaftaran->tipe_jawaban === 'Opsi'
                                                ? $pertanyaanPendaftaran->opsiJawaban->pluck('opsi')->toArray()
                                                : [],
                                        );
                                    @endphp
                                    @if (count($oldOpsi))
                                        @foreach ($oldOpsi as $i => $opsi)
                                            <div class="flex mb-2 gap-2 opsi-edit-row">
                                                <input type="text" name="opsi_jawaban[]"
                                                    value="{{ $opsi }}"
                                                    @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Opsi') required @endif
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                                    placeholder="Opsi {{ $i + 1 }}">
                                                <button type="button"
                                                    class="px-3 py-2 bg-red-500 text-white rounded-lg text-xs flex items-center justify-center btn-remove-opsi-edit"
                                                    title="Hapus Opsi"
                                                    onclick="removeOpsiJawabanEdit(this, {{ $pertanyaanPendaftaran->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-circle-minus-icon lucide-circle-minus">
                                                        <circle cx="12" cy="12" r="10" />
                                                        <path d="M8 12h8" />
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                        <div class="flex mb-2 gap-2">
                                            <button type="button"
                                                onclick="addOpsiJawabanEdit({{ $pertanyaanPendaftaran->id }})"
                                                class="px-3 py-2 bg-blue-500 text-white rounded-lg text-xs flex items-center justify-center"
                                                title="Tambah Opsi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-plus-icon lucide-circle-plus">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M8 12h8" />
                                                    <path d="M12 8v8" />
                                                </svg>
                                            </button>
                                        </div>
                                    @else
                                        <div class="flex mb-2 gap-2">
                                            <input type="text" name="opsi_jawaban[]"
                                                @if (old('tipe_jawaban', $pertanyaanPendaftaran->tipe_jawaban) === 'Opsi') required @endif
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                                placeholder="Opsi 1">
                                            <button type="button"
                                                onclick="addOpsiJawabanEdit({{ $pertanyaanPendaftaran->id }})"
                                                class="px-3 py-2 bg-blue-500 text-white rounded-lg text-xs flex items-center justify-center"
                                                title="Tambah Opsi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-plus-icon lucide-circle-plus">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="M8 12h8" />
                                                    <path d="M12 8v8" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function toggleOpsiJawabanEdit(val, id) {
                        var container = document.getElementById('opsi-jawaban-container-edit-' + id);
                        var opsiInputs = document.querySelectorAll('#opsi-jawaban-list-edit-' + id + ' input[name="opsi_jawaban[]"]');
                        if (val === 'Opsi') {
                            container.style.display = '';
                            opsiInputs.forEach(function(input) {
                                input.required = true;
                            });
                        } else {
                            container.style.display = 'none';
                            opsiInputs.forEach(function(input) {
                                input.required = false;
                            });
                        }
                    }


                    function addOpsiJawabanEdit(id) {
                        var list = document.getElementById('opsi-jawaban-list-edit-' + id);
                        var count = list.querySelectorAll('input[name="opsi_jawaban[]"]').length + 1;
                        var tipeJawaban = document.getElementById('tipe_jawaban_edit_' + id).value;
                        var requiredAttr = (tipeJawaban === 'Opsi') ? 'required' : '';
                        var div = document.createElement('div');
                        div.className = 'flex mb-2 gap-2 opsi-edit-row';
                        div.innerHTML =
                            '<input type="text" name="opsi_jawaban[]" ' + requiredAttr +
                            ' class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Opsi ' +
                            count +
                            '"><button type="button" class="px-3 py-2 bg-red-500 text-white rounded-lg text-xs flex items-center justify-center btn-remove-opsi-edit" title="Hapus Opsi" onclick="removeOpsiJawabanEdit(this, ' +
                            id + ')">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-minus-icon lucide-circle-minus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/></svg>' +
                            '</button>';
                        list.insertBefore(div, list.lastElementChild);
                    }

                    function removeOpsiJawabanEdit(btn, id) {
                        var list = document.getElementById('opsi-jawaban-list-edit-' + id);
                        if (list.querySelectorAll('input[name="opsi_jawaban[]"]').length > 1) {
                            btn.parentNode.remove();
                        }
                    }

                    // Ensure required attribute is updated if user changes tipe_jawaban after adding/removing fields
                    document.getElementById('tipe_jawaban_edit_{{ $pertanyaanPendaftaran->id }}').addEventListener('change',
                        function() {
                            toggleOpsiJawabanEdit(this.value, {{ $pertanyaanPendaftaran->id }});
                        });
                </script>

                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end gap-3 p-4 md:p-6 border-t border-gray-200 bg-gray-50 flex-shrink-0">
                    <button type="button" data-modal-hide="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}"
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
