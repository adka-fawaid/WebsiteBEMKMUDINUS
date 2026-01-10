<x-app-layout>
    <!-- Dashboard Content -->
    <main class="ml-0 md:ml-64 peer-checked:md:ml-0 transition-all duration-300">
        <section class="pt-24 px-8 pb-10 bg-[#e8eaf0] min-h-screen">
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
                            <li class="text-gray-700 font-semibold">Dashboard</li>
                        </ol>
                    </nav>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
                    </div>
                </div>

                <!-- Welcome Card -->
                <div
                    class="mb-8 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl shadow-xl p-8 text-white relative overflow-hidden">
                    <!-- Decorative Background Elements -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full -ml-24 -mb-24"></div>

                    <div class="flex items-center justify-between relative z-10">
                        <div>
                            <h2 class="text-3xl font-bold mb-3 drop-shadow-lg">Selamat Datang, Admin! 👋</h2>
                            <p class="text-blue-100 text-lg">Akses penuh untuk mengelola seluruh konten, kegiatan, dan
                                fitur website BEM KM UDINUS.</p>
                            <div class="mt-4 flex items-center gap-2 text-sm text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                <span id="realtime-clock">Loading...</span>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <div
                                class="w-32 h-32 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                                <svg class="w-20 h-20 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M16.051 12.616a1 1 0 0 1 1.909.024l.737 1.452a1 1 0 0 0 .737.535l1.634.256a1 1 0 0 1 .588 1.806l-1.172 1.168a1 1 0 0 0-.282.866l.259 1.613a1 1 0 0 1-1.541 1.134l-1.465-.75a1 1 0 0 0-.912 0l-1.465.75a1 1 0 0 1-1.539-1.133l.258-1.613a1 1 0 0 0-.282-.866l-1.156-1.153a1 1 0 0 1 .572-1.822l1.633-.256a1 1 0 0 0 .737-.535z" />
                                    <path d="M8 15H7a4 4 0 0 0-4 4v2" />
                                    <circle cx="10" cy="7" r="4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Berita Card -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium mb-1">Total Berita</p>
                                <h3 class="text-3xl font-bold text-gray-800">{{ \App\Models\Berita::count() }}</h3>
                                <a href="{{ route('admin.berita.index') }}"
                                    class="text-blue-600 text-xs mt-2 inline-flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Program Kerja Card -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium mb-1">Program Kerja</p>
                                <h3 class="text-3xl font-bold text-gray-800">{{ \App\Models\ProgramKerja::count() }}
                                </h3>
                                <a href="{{ route('admin.program-kerja.index') }}"
                                    class="text-green-600 text-xs mt-2 inline-flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Struktural Card -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium mb-1">Anggota Struktural</p>
                                <h3 class="text-3xl font-bold text-gray-800">{{ \App\Models\AnggotaUnit::count() }}
                                </h3>
                                <a href="{{ route('admin.struktural.index') }}"
                                    class="text-purple-600 text-xs mt-2 inline-flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Partnership Card -->
                    <div
                        class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-orange-500 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium mb-1">Partnership</p>
                                <h3 class="text-3xl font-bold text-gray-800">{{ \App\Models\Partnership::count() }}
                                </h3>
                                <a href="{{ route('admin.kelola-partnership.index') }}"
                                    class="text-orange-600 text-xs mt-2 inline-flex items-center gap-1 hover:gap-2 transition-all">
                                    Lihat Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m11 17 2 2a1 1 0 1 0 3-3M14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3M3 4h8" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <!-- Pendaftaran Info -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-indigo-500">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Pendaftaran & Rekap</h3>
                                <p class="text-sm text-gray-500">Status pendaftaran terbaru</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Total Form Pendaftaran</span>
                                <span
                                    class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold">{{ \App\Models\Pendaftaran::count() }}</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Total Responden</span>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-bold">{{ \App\Models\RespondPendaftaran::count() }}</span>
                            </div>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <a href="{{ route('admin.pendaftaran.index') }}"
                                class="flex-1 text-center px-4 py-2 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 rounded-lg text-sm font-medium transition-colors">
                                Kelola Form
                            </a>
                            <a href="{{ route('admin.rekap-pendaftaran.index') }}"
                                class="flex-1 text-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm font-medium transition-colors">
                                Lihat Rekap
                            </a>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-500">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Aksi Cepat</h3>
                                <p class="text-sm text-gray-500">Akses fitur penting dengan cepat</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="{{ route('admin.berita.index') }}"
                                class="p-3 bg-gradient-to-br from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 rounded-xl border border-blue-200 transition-all group">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg class="w-4 h-4 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700">Tambah Berita</span>
                                </div>
                            </a>
                            <a href="{{ route('admin.program-kerja.index') }}"
                                class="p-3 bg-gradient-to-br from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100 rounded-xl border border-green-200 transition-all group">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg class="w-4 h-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700">Tambah Proker</span>
                                </div>
                            </a>
                            <a href="{{ route('admin.struktural.index') }}"
                                class="p-3 bg-gradient-to-br from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 rounded-xl border border-purple-200 transition-all group">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg class="w-4 h-4 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700">Kelola Struktural</span>
                                </div>
                            </a>
                            <a href="{{ route('admin.kontak.index') }}"
                                class="p-3 bg-gradient-to-br from-orange-50 to-amber-50 hover:from-orange-100 hover:to-amber-100 rounded-xl border border-orange-200 transition-all group">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg class="w-4 h-4 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7M2 4h20v16H2z" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700">Pesan Kontak</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Landing Page Info -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Konten Landing Page</h3>
                                <p class="text-sm text-gray-500">Kelola konten halaman utama website</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="{{ route('admin.sambutan-presma.index') }}"
                            class="p-4 bg-gradient-to-br from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 rounded-xl border border-blue-200 transition-all group">
                            <div class="text-center">
                                <div
                                    class="w-10 h-10 mx-auto mb-2 bg-blue-100 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12h-5M15 8h-5M19 17V5a2 2 0 0 0-2-2H4M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                    </svg>
                                </div>
                                <p class="text-sm font-semibold text-gray-700">Sambutan Presma</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.kabinet.index') }}"
                            class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 rounded-xl border border-purple-200 transition-all group">
                            <div class="text-center">
                                <div
                                    class="w-10 h-10 mx-auto mb-2 bg-purple-100 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    </svg>
                                </div>
                                <p class="text-sm font-semibold text-gray-700">Kabinet & Filosofi</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.visi-misi.index') }}"
                            class="p-4 bg-gradient-to-br from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100 rounded-xl border border-green-200 transition-all group">
                            <div class="text-center">
                                <div
                                    class="w-10 h-10 mx-auto mb-2 bg-green-100 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 10.656V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.344M9 11l3 3L22 4" />
                                    </svg>
                                </div>
                                <p class="text-sm font-semibold text-gray-700">Visi & Misi</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.struktural.index') }}"
                            class="p-4 bg-gradient-to-br from-orange-50 to-amber-50 hover:from-orange-100 hover:to-amber-100 rounded-xl border border-orange-200 transition-all group">
                            <div class="text-center">
                                <div
                                    class="w-10 h-10 mx-auto mb-2 bg-orange-100 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-5 h-5 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 2v2M17.915 22a6 6 0 0 0-12 0M8 2v2M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM3 4h18v18H3z" />
                                    </svg>
                                </div>
                                <p class="text-sm font-semibold text-gray-700">Struktural</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <script>
        function updateClock() {
            const now = new Date();

            // Array nama hari dalam Bahasa Indonesia
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

            // Array nama bulan dalam Bahasa Indonesia
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            // Mendapatkan komponen tanggal dan waktu
            const dayName = days[now.getDay()];
            const date = now.getDate();
            const monthName = months[now.getMonth()];
            const year = now.getFullYear();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            // Format: "Hari, Tanggal Bulan Tahun - Jam:Menit:Detik WIB"
            const formattedTime = `${dayName}, ${date} ${monthName} ${year} - ${hours}:${minutes}:${seconds} WIB`;

            // Update elemen dengan ID realtime-clock
            const clockElement = document.getElementById('realtime-clock');
            if (clockElement) {
                clockElement.textContent = formattedTime;
            }
        }

        // Update clock setiap detik
        updateClock();
        setInterval(updateClock, 1000);
    </script>

</x-app-layout>
