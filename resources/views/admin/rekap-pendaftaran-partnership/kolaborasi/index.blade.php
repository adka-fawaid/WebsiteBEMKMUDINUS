<!-- Kolaborasi Table -->
<div class="overflow-x-auto">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-gray-900">Rekap Pendaftaran Kolaborasi</h3>
    </div>

    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b-2 border-gray-200">
                <th scope="col" class="w-[15%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No. Pendaftaran</span>
                </th>
                <th scope="col" class="w-[23%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Instansi</span>
                </th>
                <th scope="col" class="w-[12%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nomor Telepon</span>
                </th>
                <th scope="col" class="w-[23%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Acara</span>
                </th>
                <th scope="col" class="w-[15%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Proposal Acara</span>
                </th>
                <th scope="col" class="w-[12%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekapKolaborasi as $kolaborasi)
                <tr
                    class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:z-10 hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <span
                                class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg bg-blue-100 text-blue-700 font-semibold text-xs group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                {{ $kolaborasi->nomor_pendaftaran }}
                            </span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kolaborasi->nama_instansi }}">
                            {{ $kolaborasi->nama_instansi }}
                        </p>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kolaborasi->nomor_telepon }}">
                            {{ $kolaborasi->nomor_telepon }}
                        </p>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kolaborasi->nama_acara }}">
                            {{ $kolaborasi->nama_acara }}
                        </p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        @if ($kolaborasi->proposal_acara)
                            <a href="{{ asset('storage/' . $kolaborasi->proposal_acara) }}" target="_blank"
                                class="inline-flex items-center px-3 py-1.5 rounded-lg bg-green-100 text-green-700 font-semibold text-xs hover:bg-green-600 hover:text-white transition-all duration-300"
                                title="Lihat Proposal Acara">
                                Lihat Proposal
                            </a>
                        @else
                            <span
                                class="inline-flex items-center px-3 py-1.5 rounded-lg bg-gray-100 text-gray-500 font-semibold text-xs">
                                Tidak Ada Proposal
                            </span>
                        @endif
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button type="button" data-modal-target="show-kolaborasi-{{ $kolaborasi->id }}"
                                data-modal-toggle="show-kolaborasi-{{ $kolaborasi->id }}"
                                class="group/btn p-2.5 rounded-lg bg-blue-50 hover:bg-blue-600 transition-all duration-200 hover:shadow-md"
                                title="Lihat Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="text-blue-600 group-hover/btn:text-white transition-colors">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Include Show Modal -->
                @include('admin.rekap-pendaftaran-partnership.kolaborasi.show', [
                    'kolaborasi' => $kolaborasi,
                ])
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-16 text-center">
                        <div class="flex flex-col items-center justify-center">
                            <div
                                class="w-20 h-20 rounded-2xl bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center mb-4 shadow-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 8v4" />
                                    <path d="M12 16h.01" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Tidak Ada Data</h3>
                            <p class="text-sm text-gray-500">Belum ada data pendaftaran dari kolaborasi.</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script>
    // Modal handler for Kolaborasi tab
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-modal-toggle^="show-kolaborasi-"]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var modalId = btn.getAttribute('data-modal-target');
                var modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.setAttribute('aria-hidden', 'false');
                }
            });
        });
        document.querySelectorAll('[data-modal-hide^="show-kolaborasi-"]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var modalId = btn.getAttribute('data-modal-hide');
                var modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');
                    modal.setAttribute('aria-hidden', 'true');
                }
            });
        });
    });
</script>
