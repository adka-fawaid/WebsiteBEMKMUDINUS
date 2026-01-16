<x-app-layout>
    <!-- Respon Pendaftaran Content -->
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
                                <a href="{{ route('admin.rekap-pendaftaran.index') }}"
                                    class="text-blue-600 hover:text-blue-700 font-medium transition duration-150">
                                    Rekap Pendaftaran
                                </a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </li>
                            <li class="text-gray-700 font-semibold">Kelola Respon Pendaftaran</li>
                        </ol>
                    </nav>
                    <div>
                        <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Manajemen Data
                        </p>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola Respon Pendaftaran</h1>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mb-6">
                    <a href="{{ route('admin.rekap-pendaftaran.index') }}"
                        class="inline-flex items-center text-gray-700 hover:bg-blue-100 border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="group-hover:-translate-x-1 transition-transform duration-300">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                        <span class="tracking-wide">Kembali ke Rekap Pendaftaran</span>
                    </a>
                </div>

                <!-- Main Content -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-5">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5 text-white lucide lucide-book-text-icon lucide-book-text">
                                        <path
                                            d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                        <path d="M8 11h8" />
                                        <path d="M8 7h6" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-white">{{ $pendaftaran->judul }}
                                    </h2>
                                    <p class="text-xs text-blue-100">Kelola respon pendaftaran
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-900">Data Respon Pendaftaran</h3>
                            </div>

                            <table class="w-full">
                                <thead>
                                    <tr class="bg-gradient-to-r from-gray-50 to-blue-50 border-b border-gray-200">
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-16">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">No</span>
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-center font-bold w-48">
                                            <span
                                                class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">Nomor
                                                Pendaftaran</span>
                                        </th>
                                        @foreach ($pertanyaans as $pertanyaan)
                                            <th scope="col" class="px-6 py-4 text-left font-bold">
                                                <span
                                                    class="text-xs font-extrabold text-gray-700 uppercase tracking-wider">{{ $pertanyaan }}</span>
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($paginatedGroups as $nomorPendaftaran => $responses)
                                        <tr
                                            class="group border-b border-gray-100 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:shadow-lg hover:!border-l-4 hover:!border-l-blue-600 border-l-4 border-l-white transition-all duration-300">
                                            <td class="px-6 py-5 text-center">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                                    {{ ($paginatedGroups->currentPage() - 1) * $paginatedGroups->perPage() + $loop->iteration }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-5">
                                                <p class="text-sm font-semibold text-gray-900">
                                                    {{ $nomorPendaftaran }}
                                                </p>
                                            </td>
                                            @foreach ($pertanyaans as $pertanyaan)
                                                @php
                                                    $jawaban = $responses->firstWhere('pertanyaan', $pertanyaan);
                                                @endphp
                                                <td class="px-6 py-5">
                                                    <p class="text-sm text-gray-900">
                                                        {{ $jawaban ? $jawaban->jawaban : '-' }}
                                                    </p>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="{{ count($pertanyaans) + 2 }}" class="px-6 py-16 text-center">
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
                                                        Responden</h3>
                                                    <p class="text-sm text-gray-500">Belum ada yang mengisi formulir
                                                        pendaftaran ini.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            @if ($paginatedGroups->total() > 0)
                                <div
                                    class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-6 pt-4 border-t border-gray-200">
                                    <div class="flex items-center gap-2">
                                        <label for="per-page"
                                            class="text-sm text-gray-600 font-medium">Tampilkan:</label>
                                        <select id="per-page"
                                            onchange="window.location.href='{{ route('admin.rekap-pendaftaran.respon-pendaftaran.index', $pendaftaran->id) }}?per_page=' + this.value"
                                            class="rounded-lg border border-gray-200 px-3 py-1.5 text-sm focus:ring-2 focus:ring-blue-200 focus:border-blue-400 transition bg-gray-50 w-20">
                                            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5
                                            </option>
                                            <option value="10"
                                                {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>
                                                25</option>
                                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>
                                                50</option>
                                            <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>
                                                100</option>
                                        </select>
                                        <span class="text-sm text-gray-600">dari {{ $paginatedGroups->total() }}
                                            data</span>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        @if ($paginatedGroups->onFirstPage())
                                            <span
                                                class="px-3 py-1.5 text-sm text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Sebelumnya</span>
                                        @else
                                            <a href="{{ $paginatedGroups->previousPageUrl() }}"
                                                class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition">Sebelumnya</a>
                                        @endif

                                        <div class="flex gap-1">
                                            @foreach ($paginatedGroups->getUrlRange(1, $paginatedGroups->lastPage()) as $page => $url)
                                                @if ($page == $paginatedGroups->currentPage())
                                                    <span
                                                        class="px-3 py-1.5 text-sm text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg font-semibold">{{ $page }}</span>
                                                @else
                                                    <a href="{{ $url }}"
                                                        class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition">{{ $page }}</a>
                                                @endif
                                            @endforeach
                                        </div>

                                        @if ($paginatedGroups->hasMorePages())
                                            <a href="{{ $paginatedGroups->nextPageUrl() }}"
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
            </div>
        </section>
    </main>

    {{-- Include Create Modal --}}
    @include('admin.pendaftaran.formulir.create')
</x-app-layout>
