<x-app-layout>
    <!-- Kelola Partnership Content -->
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
                            <li class="text-gray-700 font-semibold">Kelola Partnership</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Partnership</h1>
                    </div>
                </div>

                <!-- Tabel Kelola Partnership -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                                        <path d="M3 3v5h5" />
                                        <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" />
                                        <path d="M16 16h5v5" />
                                        <circle cx="12" cy="12" r="1" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">Data Partnership</h2>
                                    <p class="text-xs text-blue-100">Informasi tentang partnership BEMKM Udinus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
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
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Kategori</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Deskripsi</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Link
                                                    Pendaftaran Eksternal</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Link
                                                    Eksternal</span>
                                            </th>
                                            <th scope="col" class="px-6 py-4 text-center font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Aksi</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        @forelse ($partnerships as $index => $partnership)
                                            <tr
                                                class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg transition-all duration-300">
                                                <td
                                                    class="px-6 py-5 text-center border-l-4 border-l-transparent group-hover:border-l-4 group-hover:border-l-blue-600">
                                                    <span
                                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                                        {{ $index + 1 }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-5">
                                                    <p
                                                        class="text-sm text-gray-700 font-medium group-hover:font-semibold transition-all duration-200">
                                                        {{ $partnership->kategori }}</p>
                                                </td>
                                                <td class="px-6 py-5">
                                                    <span
                                                        class="text-sm text-gray-700 font-medium">{{ $partnership->deskripsi }}</span>
                                                </td>
                                                <td class="px-6 py-5">
                                                    @if ($partnership->link_pendaftaran)
                                                        <a href="{{ $partnership->link_pendaftaran }}" target="_blank"
                                                            rel="noopener noreferrer"
                                                            class="inline-flex items-center gap-1.5 text-sm text-blue-600 hover:text-blue-700 font-medium hover:underline transition-all duration-200">
                                                            <span>{{ Str::limit($partnership->link_pendaftaran, 30) }}</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                                                <polyline points="15 3 21 3 21 9" />
                                                                <line x1="10" y1="14" x2="21"
                                                                    y2="3" />
                                                            </svg>
                                                        </a>
                                                    @else
                                                        <span class="text-sm text-gray-500">-</span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-5">
                                                    <form
                                                        action="{{ route('admin.kelola-partnership.update-link-status', $partnership->id) }}"
                                                        method="POST" class="inline-flex items-center gap-3">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="use_link" value="0">
                                                        <label
                                                            class="relative inline-flex items-center cursor-pointer">
                                                            <input type="checkbox" name="use_link" value="1"
                                                                class="sr-only peer"
                                                                {{ $partnership->use_link ? 'checked' : '' }}
                                                                onchange="this.form.submit()">
                                                            <div
                                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                                            </div>
                                                        </label>
                                                        <span
                                                            class="text-xs font-semibold {{ $partnership->use_link ? 'text-green-700' : 'text-gray-600' }}">
                                                            {{ $partnership->use_link ? 'Aktif' : 'Nonaktif' }}
                                                        </span>
                                                    </form>
                                                </td>
                                                <td class="px-6 py-5">
                                                    <div class="flex items-center justify-center gap-2">
                                                        <button type="button"
                                                            data-modal-target="edit-partnership-modal-{{ $partnership->id }}"
                                                            data-modal-toggle="edit-partnership-modal-{{ $partnership->id }}"
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Include Modal Edit Partnership (temporarily disabled to isolate parse error) -->
                                            @include('admin.kelola-partnership.edit', [
                                                'partnership' => $partnership,
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
                                                        <p class="text-sm text-gray-500">Belum ada data kontak.</p>
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
            </div>
        </section>
    </main>
</x-app-layout>
