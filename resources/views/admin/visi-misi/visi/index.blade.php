<!-- Visi Table -->
<div class="overflow-x-auto">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold text-gray-900">Data Visi Organisasi</h3>
        <button type="button" data-modal-target="add-visi-modal" data-modal-toggle="add-visi-modal"
            class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2 shadow-lg hover:shadow-xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Visi
        </button>
    </div>

    <table class="w-full">
        <thead>
            <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                <th scope="col" class="px-6 py-4 text-center font-bold w-16">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No</span>
                </th>
                <th scope="col" class="px-6 py-4 text-center font-bold">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Deskripsi Visi</span>
                </th>
                <th scope="col" class="px-6 py-4 text-center font-bold w-32">
                    <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visiList as $index => $visi)
                <tr
                    class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                    <td class="px-6 py-5 text-center">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            {{ $index + 1 }}
                        </span>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-sm text-gray-700 leading-relaxed group-hover:text-gray-900">
                            {{ $visi->visi }}
                        </p>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center justify-center gap-2">
                            <button type="button" data-modal-target="edit-visi-modal-{{ $visi->id }}"
                                data-modal-toggle="edit-visi-modal-{{ $visi->id }}"
                                class="group p-2 rounded-lg bg-amber-50 hover:bg-amber-100 transition-all duration-200 hover:shadow-md"
                                title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="text-amber-600 group-hover:text-amber-700 transition-colors">
                                    <path
                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                    <path d="m15 5 4 4" />
                                </svg>
                            </button>
                            <button type="button" data-modal-target="delete-visi-modal-{{ $visi->id }}"
                                data-modal-toggle="delete-visi-modal-{{ $visi->id }}"
                                class="group p-2 rounded-lg bg-red-50 hover:bg-red-100 transition-all duration-200 hover:shadow-md"
                                title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="text-red-600 group-hover:text-red-700 transition-colors">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                    <line x1="10" x2="10" y1="11" y2="17" />
                                    <line x1="14" x2="14" y1="11" y2="17" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Include Edit Modal -->
                @include('admin.visi-misi.visi.edit', ['visi' => $visi])

                <!-- Include Delete Modal -->
                @include('admin.visi-misi.visi.delete', ['visi' => $visi])
            @empty
                <tr>
                    <td colspan="3" class="px-6 py-16 text-center">
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
                            <p class="text-sm text-gray-500">Belum ada data visi. Klik tombol "Tambah Visi" untuk
                                menambah data.</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Include Create Visi Modal -->
@include('admin.visi-misi.visi.create')
