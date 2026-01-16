<!-- Kampus Visit Table -->
<div class="overflow-x-auto">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-gray-900">Rekap Pendaftaran Kampus Visit</h3>
    </div>

    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b-2 border-gray-200">
                <th scope="col" class="w-[12%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No. Pendaftaran</span>
                </th>
                <th scope="col" class="w-[16%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Email</span>
                </th>
                <th scope="col" class="w-[14%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Lengkap</span>
                </th>
                <th scope="col" class="w-[18%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama Instansi</span>
                </th>
                <th scope="col" class="w-[18%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nomor Telepon</span>
                </th>
                <th scope="col" class="w-[12%] px-6 py-4 text-center">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Proposal Acara</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekapKampusVisit as $kampusVisit)
                <tr
                    class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:z-10 hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                    <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                            <span
                                class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg bg-blue-100 text-blue-700 font-semibold text-xs group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                {{ $kampusVisit->nomor_pendaftaran }}
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kampusVisit->email }}">
                            {{ $kampusVisit->email }}
                        </p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kampusVisit->nama_lengkap }}">
                            {{ $kampusVisit->nama_lengkap }}
                        </p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kampusVisit->nama_instansi }}">
                            {{ $kampusVisit->nama_instansi }}
                        </p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <p class="text-sm font-medium text-gray-900 leading-tight truncate"
                            title="{{ $kampusVisit->nomor_telepon }}">
                            {{ $kampusVisit->nomor_telepon }}
                        </p>
                    </td>
                    <td class="px-6 py-4">
                        @if ($kampusVisit->proposal_acara)
                            <div class="flex justify-center">
                                <a href="{{ asset('storage/' . $kampusVisit->proposal_acara) }}" target="_blank"
                                    class="inline-flex items-center px-3 py-1.5 rounded-lg bg-green-100 text-green-700 font-semibold text-xs hover:bg-green-600 hover:text-white transition-all duration-300">
                                    Lihat Proposal
                                </a>
                            </div>
                        @else
                            <div class="flex justify-center">
                                <span
                                    class="inline-flex items-center px-3 py-1.5 rounded-lg bg-gray-100 text-gray-500 font-semibold text-xs">
                                    Tidak Ada Proposal
                                </span>
                            </div>
                        @endif
                    </td>
                </tr>
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
                            <p class="text-sm text-gray-500">Belum ada data pendaftaran dari kampus visit.</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
