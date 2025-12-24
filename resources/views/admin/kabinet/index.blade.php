<x-app-layout>
    <!-- Kabinet Content -->
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
                            <li class="text-gray-700 font-semibold">Kabinet</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Kabinet</h1>
                    </div>
                </div>

                <!-- Tabel Kabinet -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                        <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                                        <circle cx="12" cy="11" r="4" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Kabinet</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang kabinet BEM KM UDINUS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Logo</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama
                                            Kabinet</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Periode</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Deskripsi</span>
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center font-bold">
                                        <span
                                            class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @if ($kabinet)
                                    <tr
                                        class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:border-l-4 hover:border-l-blue-600 border-l-4 border-l-transparent transition-all duration-300">
                                        <td class="px-6 py-5">
                                            <div class="flex justify-center">
                                                <div class="relative overflow-hidden rounded-xl">
                                                    <img src="{{ asset('storage/img/kabinet/' . $kabinet->logo) }}"
                                                        alt="{{ $kabinet->nama }}"
                                                        class="w-32 h-32 object-cover rounded-xl shadow-md border-2 border-gray-200 group-hover:border-blue-500 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-blue-600/20 via-transparent to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p
                                                class="text-sm text-gray-700 font-medium group-hover:font-semibold transition-all duration-200">
                                                {{ $kabinet->nama }}</p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                {{ $kabinet->periode }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p class="text-sm text-gray-700 line-clamp-2 leading-relaxed">
                                                {{ Str::limit($kabinet->deskripsi, 80) }}</p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center justify-center gap-2">
                                                <button type="button"
                                                    data-modal-target="show-modal-{{ $kabinet->id }}"
                                                    data-modal-toggle="show-modal-{{ $kabinet->id }}"
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
                                                    data-modal-target="edit-modal-{{ $kabinet->id }}"
                                                    data-modal-toggle="edit-modal-{{ $kabinet->id }}"
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
                                        <td colspan="5" class="px-6 py-16 text-center">
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
                                                <p class="text-sm text-gray-500">Belum ada data kabinet.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                <!-- Include Modal Show Detail Kabinet -->
                                @include('admin.kabinet.show', [
                                    'kabinet' => $kabinet,
                                ])
                                <!-- Include Modal Edit Kabinet -->
                                @include('admin.kabinet.edit', [
                                    'kabinet' => $kabinet,
                                ])

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
