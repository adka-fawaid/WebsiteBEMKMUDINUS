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
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-900">Data Unit Organisasi</h3>
                                <button type="button" data-modal-target="add-struktural-modal"
                                    data-modal-toggle="add-struktural-modal"
                                    class="text-white bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 font-semibold rounded-lg text-sm px-5 py-2.5 transition-all duration-150 flex items-center gap-2 shadow-lg hover:shadow-xl">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    Tambah Struktural
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
                                                    {{ $index + 1 }}
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
                                                    @if ($item->kategori === 'Badan Pengurus Harian') bg-blue-100 text-blue-700
                                                    @elseif($item->kategori === 'Biro') bg-indigo-100 text-indigo-700
                                                    @else bg-purple-100 text-purple-700 @endif">
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
                                                    Kelola Unit
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
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Create Modal -->
    @include('admin.struktural.create')

    <script>
        function switchTab(tabId) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });

            // Remove active state from all buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('border-blue-600', 'text-blue-600');
                button.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700',
                    'hover:border-gray-300');
            });

            // Show selected tab
            document.getElementById(tabId).classList.remove('hidden');

            // Add active state to clicked button
            const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
            activeButton.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700',
                'hover:border-gray-300');
            activeButton.classList.add('border-blue-600', 'text-blue-600');
        }

        // Initialize first tab as active
        document.addEventListener('DOMContentLoaded', function() {
            switchTab('visi-tab');
        });
    </script>
</x-app-layout>
