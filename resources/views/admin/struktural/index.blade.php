<x-app-layout>
    <!-- Struktural Content -->
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
                            <li class="text-gray-700 font-semibold">Struktural</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Struktural</h1>
                    </div>
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
                                        <path d="M16 2v2" />
                                        <path d="M17.915 22a6 6 0 0 0-12 0" />
                                        <path d="M8 2v2" />
                                        <circle cx="12" cy="12" r="4" />
                                        <rect x="3" y="4" width="18" height="18" rx="2" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Struktural</h2>
                                    <p class="text-xs text-blue-100">Informasi unit organisasi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <div class="flex flex-col gap-2 mb-6">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                    <h3 class="text-lg font-bold text-gray-900">Data Unit Organisasi</h3>
                                    <button type="button" data-modal-target="add-struktural-modal"
                                        data-modal-toggle="add-struktural-modal"
                                        class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2 shadow-lg hover:shadow-xl mt-2 md:mt-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                        Tambah Struktural
                                    </button>
                                </div>
                                <form method="GET" action="{{ route('admin.struktural.index') }}" class="w-full mt-2">
                                    <div class="flex flex-col gap-2 w-full">
                                        <div class="flex flex-col md:flex-row gap-2 w-full">
                                            <div class="relative flex-1 min-w-0">
                                                <input type="text" name="search" id="search-input"
                                                    value="{{ request('search') }}"
                                                    placeholder="Cari unit organisasi..."
                                                    class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:ring-2 focus:ring-blue-200 focus:border-blue-400 transition w-full bg-gray-50 pr-10"
                                                    autocomplete="off" />
                                                <button type="button" id="clear-search-btn"
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none"
                                                    tabindex="-1"
                                                    style="display: {{ request('search') ? 'block' : 'none' }};">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18" />
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-full md:w-64">
                                                <select name="kategori" id="kategori-select"
                                                    class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:ring-2 focus:ring-blue-200 focus:border-blue-400 transition bg-gray-50 w-full">
                                                    <option value="">Semua Kategori</option>
                                                    <option value="Presiden Mahasiswa"
                                                        {{ request('kategori') == 'Presiden Mahasiswa' ? 'selected' : '' }}>
                                                        Presiden Mahasiswa</option>
                                                    <option value="Wakil Presiden Mahasiswa"
                                                        {{ request('kategori') == 'Wakil Presiden Mahasiswa' ? 'selected' : '' }}>
                                                        Wakil Presiden Mahasiswa</option>
                                                    <option value="Sekretaris Jenderal"
                                                        {{ request('kategori') == 'Sekretaris Jenderal' ? 'selected' : '' }}>
                                                        Sekretaris Jenderal</option>
                                                    <option value="Biro"
                                                        {{ request('kategori') == 'Biro' ? 'selected' : '' }}>Biro
                                                    </option>
                                                    <option value="Kementerian Koordinator"
                                                        {{ request('kategori') == 'Kementerian Koordinator' ? 'selected' : '' }}>
                                                        Kementerian Koordinator</option>
                                                    <option value="Kementerian"
                                                        {{ request('kategori') == 'Kementerian' ? 'selected' : '' }}>
                                                        Kementerian</option>
                                                </select>
                                            </div>
                                            <div class="flex items-center">
                                                <button type="submit"
                                                    class="inline-flex items-center gap-1 px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-lg text-sm shadow hover:from-blue-700 hover:to-indigo-700 transition">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <circle cx="11" cy="11" r="8" />
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65" />
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
                                                if (searchInput.value.length > 0) {
                                                    clearBtn.style.display = 'block';
                                                } else {
                                                    clearBtn.style.display = 'none';
                                                }
                                            }
                                            if (clearBtn && searchInput) {
                                                clearBtn.addEventListener('click', function(e) {
                                                    searchInput.value = '';
                                                    toggleClearBtn();
                                                    searchInput.form.submit();
                                                });
                                                searchInput.addEventListener('input', toggleClearBtn);
                                                toggleClearBtn();
                                            }
                                        });
                                    </script>
                                </form>
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
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Logo</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nama</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Kategori</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Deskripsi</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-32">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Kelola</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-40">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($unitOrganisasis as $index => $item)
                                        <tr
                                            class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                                            <td class="px-6 py-5 text-center">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                                    {{ ($unitOrganisasis->currentPage() - 1) * $unitOrganisasis->perPage() + $index + 1 }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-5 text-center">
                                                @if ($item->logo)
                                                    <div class="flex justify-center">
                                                        <img src="{{ asset('storage/img/unit-organisasi/' . $item->logo) }}"
                                                            alt="{{ $item->nama }}"
                                                            class="w-12 h-12 rounded-lg object-cover border-2 border-blue-100 shadow-sm">
                                                    </div>
                                                @else
                                                    <div class="flex justify-center">
                                                        <div
                                                            class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                                                            <svg class="w-6 h-6 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-5">
                                                <p class="text-sm font-semibold text-gray-900">{{ $item->nama }}</p>
                                            </td>
                                            <td class="px-6 py-5 text-center">
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                                    @if ($item->kategori === 'Presiden Mahasiswa') bg-yellow-100 text-yellow-800
                                                    @elseif($item->kategori === 'Wakil Presiden Mahasiswa') bg-orange-100 text-orange-800
                                                    @elseif($item->kategori === 'Sekretaris Jenderal') bg-green-100 text-green-800
                                                    @elseif($item->kategori === 'Badan Pengurus Harian') bg-blue-100 text-blue-700
                                                    @elseif($item->kategori === 'Biro') bg-indigo-100 text-indigo-700
                                                    @elseif($item->kategori === 'Kementerian Koordinator') bg-pink-100 text-pink-700
                                                    @elseif($item->kategori === 'Kementerian') bg-purple-100 text-purple-700
                                                    @else bg-gray-100 text-gray-700 @endif">
                                                    {{ $item->kategori }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-5">
                                                <p class="text-sm text-gray-700 line-clamp-2">
                                                    {{ Str::limit($item->deskripsi, 80) }}
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 text-center">
                                                <a href="{{ route('admin.struktural.unit-organisasi.index', $item->id) }}"
                                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 border-2 border-blue-600 hover:bg-blue-600 text-blue-600 hover:text-white text-sm font-semibold rounded-lg transition-all duration-200 group whitespace-nowrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                        <circle cx="9" cy="7" r="4" />
                                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                    </svg>
                                                    Anggota Unit
                                                </a>
                                            </td>
                                            <td class="px-6 py-5">
                                                <div class="flex items-center justify-center gap-2">
                                                    <button type="button"
                                                        data-modal-target="show-struktural-modal-{{ $item->id }}"
                                                        data-modal-toggle="show-struktural-modal-{{ $item->id }}"
                                                        class="group p-2 rounded-lg bg-blue-50 hover:bg-blue-100 transition-all duration-200 hover:shadow-md"
                                                        title="Lihat">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="text-blue-600 group-hover:text-blue-700 transition-colors">
                                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                        data-modal-target="edit-struktural-modal-{{ $item->id }}"
                                                        data-modal-toggle="edit-struktural-modal-{{ $item->id }}"
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
                                                        data-modal-target="delete-struktural-modal-{{ $item->id }}"
                                                        data-modal-toggle="delete-struktural-modal-{{ $item->id }}"
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

                                        <!-- Include Show Modal -->
                                        @include('admin.struktural.show', ['item' => $item])

                                        <!-- Include Edit Modal -->
                                        @include('admin.struktural.edit', ['item' => $item])

                                        <!-- Include Delete Modal -->
                                        @include('admin.struktural.delete', ['item' => $item])
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
                                                    <p class="text-sm text-gray-500">Belum ada data struktural. Klik
                                                        tombol "Tambah Struktural" untuk menambah data.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        @if ($unitOrganisasis->total() > 0)
                            <div
                                class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-6 pt-4 border-t border-gray-200">
                                <div class="flex items-center gap-2">
                                    <label for="per-page" class="text-sm text-gray-600 font-medium">Tampilkan:</label>
                                    <select id="per-page"
                                        onchange="window.location.href='{{ route('admin.struktural.index') }}?per_page=' + this.value + '&search={{ request('search') }}&kategori={{ request('kategori') }}'"
                                        class="rounded-lg border border-gray-200 px-3 py-1.5 text-sm focus:ring-2 focus:ring-blue-200 focus:border-blue-400 transition bg-gray-50 w-20">
                                        <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5
                                        </option>
                                        <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>
                                            10</option>
                                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>
                                            25</option>
                                    </select>
                                    <span class="text-sm text-gray-600">dari {{ $unitOrganisasis->total() }}
                                        data</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    @if ($unitOrganisasis->onFirstPage())
                                        <span
                                            class="px-3 py-1.5 text-sm text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Sebelumnya</span>
                                    @else
                                        <a href="{{ $unitOrganisasis->previousPageUrl() }}"
                                            class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition">Sebelumnya</a>
                                    @endif

                                    <div class="flex gap-1">
                                        @foreach ($unitOrganisasis->getUrlRange(1, $unitOrganisasis->lastPage()) as $page => $url)
                                            @if ($page == $unitOrganisasis->currentPage())
                                                <span
                                                    class="px-3 py-1.5 text-sm text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg font-semibold">{{ $page }}</span>
                                            @else
                                                <a href="{{ $url }}"
                                                    class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition">{{ $page }}</a>
                                            @endif
                                        @endforeach
                                    </div>

                                    @if ($unitOrganisasis->hasMorePages())
                                        <a href="{{ $unitOrganisasis->nextPageUrl() }}"
                                            class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition">Selanjutnya</a>
                                    @else
                                        <span
                                            class="px-3 py-1.5 text-sm text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Selanjutnya</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Create Modal -->
    @include('admin.struktural.create')

</x-app-layout>
