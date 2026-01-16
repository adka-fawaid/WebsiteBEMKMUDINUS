<!-- Meida Partner Table -->
<div class="overflow-x-auto">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-gray-900">Rekap Pendaftaran Media Partner</h3>
    </div>

    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b-2 border-gray-200">
                <th scope="col" class="w-[15%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No. Pendaftaran</span>
                </th>
                <th scope="col" class="w-[12%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Poster</span>
                </th>
                <th scope="col" class="w-[23%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Instansi</span>
                </th>
                <th scope="col" class="w-[23%] px-4 py-4 text-left text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Acara</span>
                </th>
                <th scope="col" class="w-[15%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Jenis Paket</span>
                </th>
                <th scope="col" class="w-[12%] px-4 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekapMedpart as $medpart)
                <tr
                    class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:z-10 hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <span
                                class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg bg-blue-100 text-blue-700 font-semibold text-xs group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                {{ $medpart->nomor_pendaftaran }}
                            </span>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        @if ($medpart->poster_acara)
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/' . $medpart->poster_acara) }}"
                                    alt="{{ $medpart->nama_instansi }}"
                                    class="w-16 h-16 rounded-lg object-cover border-2 border-blue-100 shadow-sm group-hover:border-blue-300 transition-all duration-300">
                            </div>
                        @else
                            <div class="flex justify-center">
                                <div
                                    class="w-16 h-16 rounded-lg bg-gray-100 flex items-center justify-center group-hover:bg-gray-200 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-image-off-icon lucide-image-off w-8 h-8 text-gray-400">
                                        <line x1="2" x2="22" y1="2" y2="22" />
                                        <path d="M10.41 10.41a2 2 0 1 1-2.83-2.83" />
                                        <line x1="13.5" x2="6" y1="13.5" y2="21" />
                                        <line x1="18" x2="21" y1="12" y2="15" />
                                        <path
                                            d="M3.59 3.59A1.99 1.99 0 0 0 3 5v14a2 2 0 0 0 2 2h14c.55 0 1.052-.22 1.41-.59" />
                                        <path d="M21 15V5a2 2 0 0 0-2-2H9" />
                                    </svg>
                                </div>
                            </div>
                        @endif
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $medpart->nama_instansi }}">
                            {{ $medpart->nama_instansi }}
                        </p>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $medpart->nama_acara }}">
                            {{ $medpart->nama_acara }}
                        </p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold 
                            {{ $medpart->jenis_paket == 'Paket 1' ? 'bg-emerald-100 text-emerald-700' : 'bg-purple-100 text-purple-700' }}">
                            {{ $medpart->jenis_paket }}
                        </span>
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button type="button" data-modal-target="show-modal-{{ $medpart->id }}"
                                data-modal-toggle="show-modal-{{ $medpart->id }}"
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
                @include('admin.rekap-pendaftaran-partnership.media-partner.show', [
                    'medpart' => $medpart,
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
                            <p class="text-sm text-gray-500">Belum ada data pendaftaran dari media partner.</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
