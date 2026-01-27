<div class="space-y-6">
    <!-- Informasi Pribadi -->
    <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-6">
            <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-800">Informasi Pribadi</h3>
                <p class="text-sm text-gray-500">Lengkapi data pribadi Anda</p>
            </div>
        </div>
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                Email <span class="text-red-500">*</span>
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Nama Lengkap -->
        <div>
            <label for="nama_lengkap" class="block text-sm font-semibold text-gray-700 mb-2">
                Nama Lengkap <span class="text-red-500">*</span>
            </label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('nama_lengkap') border-red-500 @enderror">
            @error('nama_lengkap')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Nama Instansi -->
        <div>
            <label for="nama_instansi" class="block text-sm font-semibold text-gray-700 mb-2">
                Nama Instansi <span class="text-red-500">*</span>
            </label>
            <input type="text" id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('nama_instansi') border-red-500 @enderror">
            @error('nama_instansi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Nomor Telepon -->
        <div>
            <label for="nomor_telepon" class="block text-sm font-semibold text-gray-700 mb-2">
                Nomor Telepon <span class="text-red-500">*</span>
            </label>
            <input type="tel" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('nomor_telepon') border-red-500 @enderror">
            @error('nomor_telepon')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<!-- Informasi Acara -->
<div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
    <div class="flex items-center gap-3 mb-6">
        <div
            class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center shadow-lg">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </div>
        <div>
            <h3 class="text-xl font-bold text-gray-800">Informasi Acara</h3>
            <p class="text-sm text-gray-500">Detail acara yang membutuhkan media partner</p>
        </div>
    </div>
    <div class="space-y-4">
        <!-- Nama Acara -->
        <div>
            <label for="nama_acara" class="block text-sm font-semibold text-gray-700 mb-2">
                Nama Acara <span class="text-red-500">*</span>
            </label>
            <input type="text" id="nama_acara" name="nama_acara" value="{{ old('nama_acara') }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('nama_acara') border-red-500 @enderror">
            @error('nama_acara')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi Acara -->
        <div>
            <label for="deskripsi_acara" class="block text-sm font-semibold text-gray-700 mb-2">
                Deskripsi Acara <span class="text-red-500">*</span>
            </label>
            <textarea id="deskripsi_acara" name="deskripsi_acara" rows="4" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition @error('deskripsi_acara') border-red-500 @enderror">{{ old('deskripsi_acara') }}</textarea>
            @error('deskripsi_acara')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Jenis Paket -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Jenis Paket <span class="text-red-500">*</span>
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <label
                    class="relative flex items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-purple-500 transition">
                    <input type="radio" name="jenis_paket" value="gratis"
                        {{ old('jenis_paket') == 'gratis' ? 'checked' : '' }} class="sr-only peer"
                        onchange="toggleBuktiPembayaran()">
                    <div
                        class="w-full flex items-center justify-between peer-checked:border-purple-500 peer-checked:bg-purple-50 rounded-lg p-2">
                        <span class="font-semibold text-gray-700 peer-checked:text-purple-700">Gratis</span>
                        <svg class="w-6 h-6 text-purple-600 opacity-0 peer-checked:opacity-100" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </label>
                <label
                    class="relative flex items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-purple-500 transition">
                    <input type="radio" name="jenis_paket" value="berbayar"
                        {{ old('jenis_paket') == 'berbayar' ? 'checked' : '' }} class="sr-only peer"
                        onchange="toggleBuktiPembayaran()">
                    <div
                        class="w-full flex items-center justify-between peer-checked:border-purple-500 peer-checked:bg-purple-50 rounded-lg p-2">
                        <span class="font-semibold text-gray-700 peer-checked:text-purple-700">Berbayar</span>
                        <svg class="w-6 h-6 text-purple-600 opacity-0 peer-checked:opacity-100" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </label>
            </div>
            @error('jenis_paket')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<!-- Upload Dokumen -->
<div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
    <div class="flex items-center gap-3 mb-6">
        <div
            class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center shadow-lg">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
        </div>
        <div>
            <h3 class="text-xl font-bold text-gray-800">Upload Dokumen</h3>
            <p class="text-sm text-gray-500">Unggah dokumen pendukung</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Proposal Acara -->
        <div>
            <label for="proposal_acara" class="block text-sm font-semibold text-gray-700 mb-2">
                Proposal Acara (PDF) <span class="text-red-500">*</span>
            </label>
            <input type="file" id="proposal_acara" name="proposal_acara" accept=".pdf" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('proposal_acara') border-red-500 @enderror">
            <p class="text-xs text-gray-500 mt-1">Max: 10MB</p>
            @error('proposal_acara')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Poster Acara -->
        <div>
            <label for="poster_acara" class="block text-sm font-semibold text-gray-700 mb-2">
                Poster Acara (JPG/PNG) <span class="text-red-500">*</span>
            </label>
            <input type="file" id="poster_acara" name="poster_acara" accept=".jpg,.jpeg,.png" required
                onchange="previewPoster(event)"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('poster_acara') border-red-500 @enderror">
            <p class="text-xs text-gray-500 mt-1">Max: 5MB</p>
            @error('poster_acara')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <!-- Preview Poster -->
            <div id="poster-preview" class="mt-3 hidden">
                <img id="poster-img" src="" alt="Preview" class="w-full h-48 object-cover rounded-lg">
            </div>
        </div>

        <!-- Bukti Follow -->
        <div>
            <label for="bukti_follow" class="block text-sm font-semibold text-gray-700 mb-2">
                Bukti Follow Instagram (JPG/PNG) <span class="text-red-500">*</span>
            </label>
            <input type="file" id="bukti_follow" name="bukti_follow" accept=".jpg,.jpeg,.png" required
                onchange="previewBuktiFollow(event)"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('bukti_follow') border-red-500 @enderror">
            <p class="text-xs text-gray-500 mt-1">Max: 5MB</p>
            @error('bukti_follow')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <!-- Preview Bukti Follow -->
            <div id="follow-preview" class="mt-3 hidden">
                <img id="follow-img" src="" alt="Preview" class="w-full h-48 object-cover rounded-lg">
            </div>
        </div>

        <!-- Bukti Pembayaran (Conditional) -->
        <div id="bukti-pembayaran-wrapper" class="hidden">
            <label for="bukti_pembayaran" class="block text-sm font-semibold text-gray-700 mb-2">
                Bukti Pembayaran (JPG/PNG)
            </label>
            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept=".jpg,.jpeg,.png"
                onchange="previewBuktiPembayaran(event)"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('bukti_pembayaran') border-red-500 @enderror">
            <p class="text-xs text-gray-500 mt-1">Max: 5MB</p>
            @error('bukti_pembayaran')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <!-- Preview Bukti Pembayaran -->
            <div id="pembayaran-preview" class="mt-3 hidden">
                <img id="pembayaran-img" src="" alt="Preview" class="w-full h-48 object-cover rounded-lg">
            </div>
        </div>

        <!-- Akun Tag -->
        <div class="md:col-span-2">
            <label for="akun_tag" class="block text-sm font-semibold text-gray-700 mb-2">
                Akun Instagram yang Ingin di-Tag <span class="text-red-500">*</span>
            </label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-gray-700 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg">
                    @
                </span>
                <input type="text" id="akun_tag" name="akun_tag" value="{{ old('akun_tag') }}" required
                    placeholder="username_instagram"
                    class="flex-1 px-4 py-3 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition @error('akun_tag') border-red-500 @enderror">
            </div>
            @error('akun_tag')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
</div>

<script>
    function toggleBuktiPembayaran() {
        const jenisPaket = document.querySelector('input[name="jenis_paket"]:checked');
        const buktiWrapper = document.getElementById('bukti-pembayaran-wrapper');
        const buktiInput = document.getElementById('bukti_pembayaran');

        if (jenisPaket && jenisPaket.value === 'berbayar') {
            buktiWrapper.classList.remove('hidden');
            buktiInput.required = true;
        } else {
            buktiWrapper.classList.add('hidden');
            buktiInput.required = false;
            buktiInput.value = '';
            document.getElementById('pembayaran-preview').classList.add('hidden');
        }
    }

    function previewPoster(event) {
        const preview = document.getElementById('poster-preview');
        const img = document.getElementById('poster-img');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    function previewBuktiFollow(event) {
        const preview = document.getElementById('follow-preview');
        const img = document.getElementById('follow-img');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    function previewBuktiPembayaran(event) {
        const preview = document.getElementById('pembayaran-preview');
        const img = document.getElementById('pembayaran-img');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleBuktiPembayaran();
    });
</script>
