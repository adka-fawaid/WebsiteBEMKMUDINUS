<x-app-layout>
    <!-- Formulir Pendaftaran Content -->
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
                            <li>
                                <a href="{{ route('admin.pendaftaran.index') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150">
                                    Pendaftaran
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Kelola Formulir Pendaftaran</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Formulir Pendaftaran</h1>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mb-6">
                    <a href="{{ route('admin.pendaftaran.index') }}"
                        class="inline-flex items-center text-gray-700 hover:bg-blue-100 border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="group-hover:-translate-x-1 transition-transform duration-300">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                        <span class="tracking-wide">Kembali ke Pendaftaran</span>
                    </a>
                </div>

                <!-- Main Content -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">{{ $pendaftaran->judul }}
                                    </h2>
                                    <p class="text-xs text-blue-100">Kelola formulir pendaftaran
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-900">Data Formulir Pendaftaran</h3>
                                <button type="button" data-modal-target="add-pertanyaan-modal"
                                    data-modal-toggle="add-pertanyaan-modal"
                                    class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2 shadow-lg hover:shadow-xl">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    Tambah Pertanyaan
                                </button>
                            </div>

                            <table class="w-full">
                                <thead>
                                    <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-16">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-24">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Pertanyaan</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-left font-bold">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Tipe
                                                Jawaban</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-40">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Opsi
                                                Jawaban</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pertanyaanPendaftarans as $index => $pertanyaanPendaftaran)
                                <tbody x-data="{ open: false }">
                                    <tr
                                        class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                                        <td class="px-6 py-5 text-center">
                                            <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                                {{ $index + 1 }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p class="text-sm font-semibold text-gray-900">
                                                {{ $pertanyaanPendaftaran->pertanyaan }}
                                            </p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <p class="text-sm font-semibold text-gray-900">
                                                {{ $pertanyaanPendaftaran->tipe_jawaban }}
                                            </p>
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center justify-center gap-2">
                                                <button type="button"
                                                    data-modal-target="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}"
                                                    data-modal-toggle="edit-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}"
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
                                                <button type="button"
                                                    data-modal-target="delete-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}"
                                                    data-modal-toggle="delete-pertanyaan-modal-{{ $pertanyaanPendaftaran->id }}"
                                                    class="group p-2 rounded-lg bg-red-50 hover:bg-red-100 transition-all duration-200 hover:shadow-md"
                                                    title="Hapus">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="text-red-600 group-hover:text-red-700 transition-colors">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11"
                                                            y2="17" />
                                                        <line x1="14" x2="14" y1="11"
                                                            y2="17" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 text-center">
                                            @if ($pertanyaanPendaftaran->tipe_jawaban === 'Opsi')
                                                <button type="button" @click="open = !open"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 border-2 border-blue-600 hover:bg-blue-600 text-blue-600 hover:text-white text-sm font-semibold rounded-lg transition-all duration-200 group whitespace-nowrap">
                                                    Opsi Jawaban
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="transition-transform duration-300"
                                                        :class="{ 'rotate-180': open }">
                                                        <path d="m18 15-6-6-6 6" />
                                                    </svg>
                                                </button>
                                            @else
                                                <span class="text-gray-400 text-lg">&mdash;</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr x-show="open" x-transition x-cloak>
                                        <td colspan="5" class="bg-blue-50 px-6 py-4">
                                            <div class="flex flex-col gap-2">
                                                <div class="font-semibold text-blue-700 text-xs mb-1">Daftar Opsi
                                                    Jawaban:</div>
                                                @php
                                                    $opsiList = $pertanyaanPendaftaran->opsiJawaban ?? collect();
                                                @endphp
                                                @if ($opsiList->count())
                                                    <ul class="list-disc pl-5 text-sm text-blue-900">
                                                        @foreach ($opsiList as $opsi)
                                                            <li>{{ $opsi->opsi }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <div class="text-gray-500 text-xs italic">Belum ada opsi
                                                        jawaban.</div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                                {{-- Include Modals --}}
                                @include('admin.pendaftaran.formulir.edit', [
                                    'pertanyaanPendaftaran' => $pertanyaanPendaftaran,
                                ])
                                @include('admin.pendaftaran.formulir.delete', [
                                    'pertanyaanPendaftaran' => $pertanyaanPendaftaran,
                                ])
                            @empty
                                <tbody>
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
                                                <h3 class="text-lg font-bold text-gray-900 mb-1">Tidak Ada Data
                                                    Pertanyaan
                                                </h3>
                                                <p class="text-sm text-gray-500">Belum ada pertanyaan dalam
                                                    formulir ini.
                                                    Klik tombol "Tambah Pertanyaan" untuk menambah data.</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Include Create Modal --}}
    @include('admin.pendaftaran.formulir.create')
</x-app-layout>
