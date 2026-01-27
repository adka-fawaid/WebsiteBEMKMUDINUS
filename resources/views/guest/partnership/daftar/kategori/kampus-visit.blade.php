<div class="space-y-6">
    <!-- Informasi Pribadi -->
    <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-6">
            <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-yellow-600 flex items-center justify-center shadow-lg">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition @error('email') border-red-500 @enderror">
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
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition @error('nama_lengkap') border-red-500 @enderror">
                @error('nama_lengkap')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nama Instansi -->
            <div>
                <label for="nama_instansi" class="block text-sm font-semibold text-gray-700 mb-2">
                    Nama Instansi <span class="text-red-500">*</span>
                </label>
                <input type="text" id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi') }}"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition @error('nama_instansi') border-red-500 @enderror">
                @error('nama_instansi')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nomor Telepon -->
            <div>
                <label for="nomor_telepon" class="block text-sm font-semibold text-gray-700 mb-2">
                    Nomor Telepon <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition @error('nomor_telepon') border-red-500 @enderror">
                @error('nomor_telepon')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Upload Dokumen -->
    <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-6">
            <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-800">Upload Dokumen</h3>
                <p class="text-sm text-gray-500">Unggah proposal kunjungan</p>
            </div>
        </div>

        <div>
            <!-- Proposal Acara -->
            <div>
                <label for="proposal_acara" class="block text-sm font-semibold text-gray-700 mb-2">
                    Proposal Kunjungan (PDF) <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="file" id="proposal_acara" name="proposal_acara" accept=".pdf" required
                        onchange="handleFileSelect('proposal_acara')"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('proposal_acara') border-red-500 @enderror">
                    <button type="button" id="clear-proposal_acara" onclick="clearFileInput('proposal_acara')"
                        class="hidden absolute right-2 top-1/2 -translate-y-1/2 p-2 text-red-500 hover:text-red-700 hover:bg-red-50 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-xs text-gray-500 mt-1">Max: 10MB</p>
                @error('proposal_acara')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Info Note -->
    <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-lg">
        <div class="flex items-start">
            <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd" />
            </svg>
            <div>
                <p class="text-sm font-semibold text-amber-800">Informasi Penting</p>
                <p class="text-sm text-amber-700 mt-1">Setelah pendaftaran, Anda akan menerima nomor pendaftaran dengan
                    format <strong>KV-{{ date('Y') }}-XXX</strong>. Simpan nomor ini untuk keperluan tracking.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function handleFileSelect(fieldName) {
        const input = document.getElementById(fieldName);
        const clearBtn = document.getElementById('clear-' + fieldName);

        if (input.files.length > 0) {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
        }
    }

    function clearFileInput(fieldName) {
        const input = document.getElementById(fieldName);
        const clearBtn = document.getElementById('clear-' + fieldName);

        input.value = '';
        clearBtn.classList.add('hidden');
    }
</script>
