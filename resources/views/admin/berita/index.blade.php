<x-app-layout>
    <!-- Berita Content -->
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
                            <li class="text-gray-700 font-semibold">Berita</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Berita</h1>
                    </div>
                </div>

                <!-- Tabel Berita -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="shrink-0 w-4 h-4 {{ request()->routeIs('admin.berita.index') ? 'text-white' : 'text-blue-600' }}"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M15 18h-5" />
                                        <path d="M18 14h-8" />
                                        <path
                                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2" />
                                        <rect width="8" height="4" x="10" y="6" rx="1" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Berita</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang berita BEMKM Udinus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <div class="flex flex-col gap-2 mb-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                    <h3 class="text-lg font-bold text-gray-900">Data Berita</h3>
                                    <button type="button" data-modal-target="add-berita-modal"
                                        data-modal-toggle="add-berita-modal"
                                        class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2 shadow-lg hover:shadow-xl mt-2 md:mt-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                        Tambah Berita
                                    </button>
                                </div>
                                <form method="GET" action="" class="w-full mt-2">
                                    <div class="flex flex-col gap-2 w-full">
                                        <div class="flex flex-col md:flex-row gap-2 w-full">
                                            <div class="relative flex-1 min-w-0">
                                                <input type="text" id="search-input" name="search"
                                                    value="{{ request('search') }}"
                                                    placeholder="Cari berdasarkan judul atau deskripsi..."
                                                    class="w-full pl-10 pr-10 py-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-150">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                </div>
                                                <button type="button" id="clear-search-btn"
                                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600"
                                                    style="display: {{ request('search') ? 'flex' : 'none' }};">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-full md:w-64">
                                                <select id="kategori-select" name="kategori"
                                                    class="w-full px-4 py-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-150">
                                                    <option value="">Semua Kategori</option>
                                                    <option value="Berita Acara"
                                                        {{ request('kategori') == 'Berita Acara' ? 'selected' : '' }}>
                                                        Berita Acara</option>
                                                    <option value="Berita Kegiatan"
                                                        {{ request('kategori') == 'Berita Kegiatan' ? 'selected' : '' }}>
                                                        Berita Kegiatan</option>
                                                    <option value="Press Release"
                                                        {{ request('kategori') == 'Press Release' ? 'selected' : '' }}>
                                                        Press Release</option>
                                                    <option value="Informasi"
                                                        {{ request('kategori') == 'Informasi' ? 'selected' : '' }}>
                                                        Informasi</option>
                                                    <option value="Lain-lain"
                                                        {{ request('kategori') == 'Lain-lain' ? 'selected' : '' }}>
                                                        Lain-lain</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center">
                                                <button type="submit"
                                                    class="w-full md:w-auto px-5 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 rounded-lg transition-all duration-150 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                    Cari
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        // Autosubmit kategori
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var kategoriSelect = document.getElementById('kategori-select');
                                            if (kategoriSelect) {
                                                kategoriSelect.addEventListener('change', function() {
                                                    this.form.submit();
                                                });
                                            }

                                            // Clear search
                                            var clearBtn = document.getElementById('clear-search-btn');
                                            var searchInput = document.getElementById('search-input');

                                            function toggleClearBtn() {
                                                if (searchInput && clearBtn) {
                                                    clearBtn.style.display = searchInput.value ? 'flex' : 'none';
                                                }
                                            }

                                            if (clearBtn && searchInput) {
                                                clearBtn.addEventListener('click', function() {
                                                    searchInput.value = '';
                                                    toggleClearBtn();
                                                    searchInput.form.submit();
                                                });

                                                searchInput.addEventListener('input', toggleClearBtn);
                                            }
                                        });
                                    </script>
                                </form>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Gambar</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Judul</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Kategori</span>
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
                                        @forelse ($beritas as $index => $berita)
                                            @php
                                                $index =
                                                    ($beritas->currentPage() - 1) * $beritas->perPage() +
                                                    $loop->iteration;
                                            @endphp
                                            <tr
                                                class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:border-l-4 hover:border-l-blue-600 border-l-4 border-l-transparent transition-all duration-300">
                                                <td class="px-6 py-5 text-center">
                                                    <span
                                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                                        {{ $index }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-5">
                                                    @if ($berita->gambar)
                                                        <div class="flex justify-center">
                                                            <img src="{{ asset('storage/img/berita/' . $berita->gambar) }}"
                                                                alt="{{ $berita->judul }}"
                                                                class="w-12 h-12 rounded-lg object-cover border-2 border-blue-100 shadow-sm">
                                                        </div>
                                                    @else
                                                        <div class="flex justify-center">
                                                            <div
                                                                class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                                                                <svg class="w-6 h-6 text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-5">
                                                    <span
                                                        class="text-sm text-gray-700 font-medium">{{ $berita->judul }}</span>
                                                </td>
                                                <td class="px-6 py-5 text-center">
                                                    @if ($berita->kategori === 'Berita Acara')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-red-100 text-red-700 border border-red-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1.5">
                                                                <path
                                                                    d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                                                <polyline points="14 2 14 8 20 8" />
                                                            </svg>
                                                            Berita Acara
                                                        </span>
                                                    @elseif ($berita->kategori === 'Berita Kegiatan')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-blue-100 text-blue-700 border border-blue-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1.5">
                                                                <rect x="3" y="4" width="18" height="18"
                                                                    rx="2" ry="2" />
                                                                <line x1="16" y1="2" x2="16"
                                                                    y2="6" />
                                                                <line x1="8" y1="2" x2="8"
                                                                    y2="6" />
                                                                <line x1="3" y1="10" x2="21"
                                                                    y2="10" />
                                                            </svg>
                                                            Berita Kegiatan
                                                        </span>
                                                    @elseif ($berita->kategori === 'Press Release')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-purple-100 text-purple-700 border border-purple-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1.5">
                                                                <path
                                                                    d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                                                                <path d="M18 14h-8" />
                                                                <path d="M15 18h-5" />
                                                                <path d="M10 6h8v4h-8V6Z" />
                                                            </svg>
                                                            Press Release
                                                        </span>
                                                    @elseif ($berita->kategori === 'Informasi')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-green-100 text-green-700 border border-green-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1.5">
                                                                <circle cx="12" cy="12" r="10" />
                                                                <path d="M12 16v-4" />
                                                                <path d="M12 8h.01" />
                                                            </svg>
                                                            Informasi
                                                        </span>
                                                    @elseif ($berita->kategori === 'Lain-lain')
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-gray-100 text-gray-700 border border-gray-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1.5">
                                                                <circle cx="12" cy="12" r="1" />
                                                                <circle cx="19" cy="12" r="1" />
                                                                <circle cx="5" cy="12" r="1" />
                                                            </svg>
                                                            Lain-lain
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold bg-gray-100 text-gray-700 border border-gray-200">
                                                            {{ $berita->kategori }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-5 text-left">
                                                    <p class="text-sm text-gray-700 line-clamp-2 leading-relaxed">
                                                        {{ Str::limit($berita->deskripsi, 80) }}</p>
                                                    </p>
                                                </td>
                                                <td class="px-6 py-5">
                                                    <div class="flex items-center justify-center gap-2">
                                                        <button type="button"
                                                            data-modal-target="show-berita-modal-{{ $berita->id }}"
                                                            data-modal-toggle="show-berita-modal-{{ $berita->id }}"
                                                            class="group p-2 rounded-lg bg-blue-50 hover:bg-blue-100 transition-all duration-200 hover:shadow-md"
                                                            title="Lihat">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="text-blue-600 group-hover:text-blue-700 transition-colors">
                                                                <path
                                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg>
                                                        </button>
                                                        <button type="button"
                                                            data-modal-target="edit-berita-modal-{{ $berita->id }}"
                                                            data-modal-toggle="edit-berita-modal-{{ $berita->id }}"
                                                            class="group p-2 rounded-lg bg-amber-50 hover:bg-amber-100 transition-all duration-200 hover:shadow-md"
                                                            title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="text-amber-600 group-hover:text-amber-700 transition-colors">
                                                                <path
                                                                    d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                                <path d="m15 5 4 4" />
                                                            </svg>
                                                        </button>
                                                        <button type="button"
                                                            data-modal-target="delete-berita-modal-{{ $berita->id }}"
                                                            data-modal-toggle="delete-berita-modal-{{ $berita->id }}"
                                                            class="group p-2 rounded-lg bg-red-50 hover:bg-red-100 transition-all duration-200 hover:shadow-md"
                                                            title="Hapus">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
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
                                            </tr>
                                            <!-- Include Modal Show Berita -->
                                            @include('admin.berita.show', [
                                                'berita' => $berita,
                                            ])
                                            <!-- Include Modal Edit Berita -->
                                            @include('admin.berita.edit', [
                                                'berita' => $berita,
                                            ])
                                            <!-- Include Modal Delete Berita -->
                                            @include('admin.berita.delete', [
                                                'berita' => $berita,
                                            ])
                                        @empty
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
                                                        <h3 class="text-lg font-bold text-gray-900 mb-1">Tidak Ada Data
                                                        </h3>
                                                        <p class="text-sm text-gray-500">Belum ada data berita.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                @if ($beritas->total() > 0)
                                    <div
                                        class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-6 pt-4 border-t border-gray-200">
                                        <div class="flex items-center gap-2">
                                            <label for="per-page"
                                                class="text-sm text-gray-600 font-medium">Tampilkan:</label>
                                            <select id="per-page"
                                                onchange="window.location.href='?per_page=' + this.value + '&search={{ request('search') }}&kategori={{ request('kategori') }}'"
                                                class="px-3 py-1.5 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white">
                                                <option value="5"
                                                    {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                                <option value="10"
                                                    {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                                                <option value="25"
                                                    {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                                <option value="50"
                                                    {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                                <option value="100"
                                                    {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                                            </select>
                                            <span class="text-sm text-gray-600">dari {{ $beritas->total() }}
                                                data</span>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            @if ($beritas->onFirstPage())
                                                <span
                                                    class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                                                    Sebelumnya
                                                </span>
                                            @else
                                                <a href="{{ $beritas->previousPageUrl() }}"
                                                    class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 rounded-lg transition-all duration-150 shadow-md hover:shadow-lg">
                                                    Sebelumnya
                                                </a>
                                            @endif

                                            <div class="flex gap-1">
                                                @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                                                    <a href="{{ $url }}"
                                                        class="px-3 py-2 text-sm font-medium rounded-lg transition-all duration-150 {{ $page == $beritas->currentPage() ? 'text-white bg-gradient-to-r from-blue-600 to-indigo-600 shadow-md' : 'text-gray-700 bg-white hover:bg-gray-50 border border-gray-300' }}">
                                                        {{ $page }}
                                                    </a>
                                                @endforeach
                                            </div>

                                            @if ($beritas->hasMorePages())
                                                <a href="{{ $beritas->nextPageUrl() }}"
                                                    class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 rounded-lg transition-all duration-150 shadow-md hover:shadow-lg">
                                                    Selanjutnya
                                                </a>
                                            @else
                                                <span
                                                    class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                                                    Selanjutnya
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <!-- Include Modal Create Berita -->
    @include('admin.berita.create')
</x-app-layout>
