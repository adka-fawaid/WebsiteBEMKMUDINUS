<!-- ===================== EDIT PERTANYAAN MODAL ===================== -->
<div id="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}" tabindex="-1"
    class="hidden fixed inset-0 z-50 flex items-center justify-center">

    <div class="relative p-4 w-full max-w-2xl h-full flex items-center justify-center">
        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-h-[90vh] flex flex-col">

            <div class="p-6 bg-gradient-to-br from-blue-600 to-indigo-600 text-white">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold">Edit Pertanyaan</h3>
                    <button type="button"
                        data-modal-hide="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}">✕</button>
                </div>
            </div>

            <form
                action="{{ route('admin.pendaftaran.formulir.pertanyaan.update', [$pendaftaran->id, $pertanyaanPendaftaran->id]) }}"
                method="POST" class="flex flex-col flex-1 overflow-hidden">
                @csrf
                @method('PUT')

                <div class="flex-1 overflow-y-auto p-6 space-y-4">

                    <!-- Pertanyaan -->
                    <div>
                        <label class="text-xs font-semibold">PERTANYAAN</label>
                        <input type="text" name="pertanyaan"
                            value="{{ $pertanyaanPendaftaran->pertanyaan }}"
                            class="w-full mt-1 px-4 py-2 border rounded-lg" required>
                    </div>

                    <!-- Tipe Jawaban -->
                    <div>
                        <label class="text-xs font-semibold">TIPE JAWABAN</label>
                        <select name="tipe_jawaban"
                            class="tipe-jawaban-select w-full mt-1 px-4 py-2 border rounded-lg" required>
                            @foreach (['Jawaban Panjang','Jawaban Singkat','Opsi','File'] as $tipe)
                                <option value="{{ $tipe }}"
                                    {{ $pertanyaanPendaftaran->tipe_jawaban === $tipe ? 'selected' : '' }}>
                                    {{ $tipe }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- OPSI -->
                    <div class="opsi-container border rounded-xl p-4"
                        style="{{ $pertanyaanPendaftaran->tipe_jawaban === 'Opsi' ? '' : 'display:none' }}">

                        <label class="text-xs font-semibold block mb-2">OPSI JAWABAN</label>

                        <div class="opsi-jawaban-list space-y-2">
                            @forelse ($pertanyaanPendaftaran->opsiJawaban as $opsi)
                                <div class="flex gap-2">
                                    <input type="text"
                                        name="opsi_jawaban[]"
                                        value="{{ $opsi->opsi }}"
                                        class="w-full px-3 py-2 border rounded-lg">
                                    <button type="button"
                                        class="btn-remove-opsi px-3 bg-red-500 text-white rounded-lg">−</button>
                                </div>
                            @empty
                                <div class="flex gap-2">
                                    <input type="text"
                                        name="opsi_jawaban[]"
                                        class="w-full px-3 py-2 border rounded-lg">
                                    <button type="button"
                                        class="btn-remove-opsi px-3 bg-red-500 text-white rounded-lg">−</button>
                                </div>
                            @endforelse
                        </div>

                        <button type="button"
                            class="btn-add-opsi mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg">
                            + Tambah Opsi
                        </button>
                    </div>
                </div>

                <div class="p-4 border-t flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('click', function(e) {

    // ADD OPSI
    const addBtn = e.target.closest('.btn-add-opsi');
    if (addBtn) {
        const list = addBtn.closest('.opsi-container')
                           .querySelector('.opsi-jawaban-list');

        const row = document.createElement('div');
        row.className = 'flex gap-2';
        row.innerHTML = `
            <input type="text" name="opsi_jawaban[]"
                class="w-full px-3 py-2 border rounded-lg">
            <button type="button"
                class="btn-remove-opsi px-3 bg-red-500 text-white rounded-lg">−</button>
        `;
        list.appendChild(row);
    }

    // REMOVE OPSI
    const removeBtn = e.target.closest('.btn-remove-opsi');
    if (removeBtn) {
        removeBtn.closest('.flex').remove();
    }
});

// TOGGLE OPSI
document.addEventListener('change', function(e) {
    if (!e.target.classList.contains('tipe-jawaban-select')) return;
    const container = e.target.closest('form').querySelector('.opsi-container');
    container.style.display = e.target.value === 'Opsi' ? '' : 'none';
});
</script>
