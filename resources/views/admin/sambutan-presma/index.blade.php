<x-app-layout>

    <!-- Sambutan Presma Content -->
    <main class="ml-0 md:ml-64 peer-checked:md:ml-0 transition-all duration-300">
        <section class="pt-24 px-8 pb-10 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 min-h-screen">
            <div class="max-w-7xl mx-auto px-3">
                <!-- Heading dan Breadcrumb -->
                <div class="mb-8">
                    <nav class="text-sm mb-4">
                        <ol class="flex items-center space-x-2">
                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                        <polyline points="9 22 9 12 15 12 15 22" />
                                    </svg>
                                    Admin
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Sambutan Presma</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Sambutan Presma</h1>
                    </div>
                </div>

                <!-- Tabel Sambutan Presma -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M15 12h-5" />
                                        <path d="M15 8h-5" />
                                        <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                        <path
                                            d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Sambutan Presma</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang sambutan presiden mahasiswa</p>
                                </div>
                            </div>
                            {{-- <button
                                class="text-white bg-white/20 hover:bg-white/30 backdrop-blur-sm font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Tambah Data
                            </button> --}}
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Foto</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">NIM</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Program
                                            Studi</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Angkatan</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Sambutan</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @if ($sambutanPresma)
                                    <tr
                                        class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:border-l-4 hover:border-l-blue-600 border-l-4 border-l-transparent transition-all duration-300">
                                        <td class="px-6 py-5">
                                            <div class="flex justify-center">
                                                <div class="relative overflow-hidden rounded-xl">
                                                    <img src="{{ asset('storage/img/presiden-mahasiswa/' . $sambutanPresma->foto) }}"
                                                        alt="{{ $sambutanPresma->nama }}"
                                                        class="w-20 h-24 object-cover rounded-xl shadow-md border-2 border-gray-200 group-hover:border-blue-500 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-600/20 via-transparent to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p
                                                class="text-sm text-gray-700 font-medium group-hover:font-semibold transition-all duration-200">
                                                {{ $sambutanPresma->nama }}</p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <span
                                                class="text-sm text-gray-700 font-medium">{{ $sambutanPresma->nim }}</span>
                                        </td>
                                        <td class="px-6 py-5">
                                            <span
                                                class="text-sm text-gray-700 font-medium">{{ $sambutanPresma->program_studi }}</span>
                                        </td>
                                        <td class="px-6 py-5">
                                            <span
                                                class="text-sm text-gray-700 font-medium">{{ $sambutanPresma->angkatan }}</span>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p class="text-sm text-gray-700 line-clamp-2 leading-relaxed">
                                                {{ Str::limit($sambutanPresma->sambutan, 80) }}</p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center justify-center gap-2">
                                                <button type="button"
                                                    data-modal-target="show-modal-{{ $sambutanPresma->id }}"
                                                    data-modal-toggle="show-modal-{{ $sambutanPresma->id }}"
                                                    class="group p-2 rounded-lg bg-blue-50 hover:bg-blue-100 transition-all duration-200 hover:shadow-md"
                                                    title="Lihat Detail">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="text-blue-600 group-hover:text-blue-700 transition-colors">
                                                        <path
                                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                                        <circle cx="12" cy="12" r="3" />
                                                    </svg>
                                                </button>
                                                <button type="button"
                                                    data-modal-target="edit-modal-{{ $sambutanPresma->id }}"
                                                    data-modal-toggle="edit-modal-{{ $sambutanPresma->id }}"
                                                    class="group p-2 rounded-lg bg-amber-50 hover:bg-amber-100 transition-all duration-200 hover:shadow-md"
                                                    title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="text-amber-600 group-hover:text-amber-700 transition-colors">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="7" class="px-6 py-16 text-center">
                                            <div class="flex flex-col items-center justify-center">
                                                <div
                                                    class="w-20 h-20 rounded-2xl bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center mb-4 shadow-inner">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                        height="40" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-gray-400">
                                                        <circle cx="12" cy="12" r="10" />
                                                        <path d="M12 8v4" />
                                                        <path d="M12 16h.01" />
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg font-bold text-gray-900 mb-1">Tidak Ada Data</h3>
                                                <p class="text-sm text-gray-500">Belum ada data sambutan presiden
                                                    mahasiswa.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                <!-- Include Modal Show Detail Sambutan Presma -->
                                @include('admin.sambutan-presma.show', [
                                    'sambutanPresma' => $sambutanPresma,
                                ])
                                <!-- Include Modal Edit Sambutan Presma -->
                                @include('admin.sambutan-presma.edit', [
                                    'sambutanPresma' => $sambutanPresma,
                                ])

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
