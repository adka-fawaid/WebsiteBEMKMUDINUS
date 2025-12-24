<!-- Overlay backdrop (hanya untuk mobile) -->
<label for="menu-toggle"
    class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden peer-checked:block md:peer-checked:hidden transition-opacity duration-300 cursor-pointer"></label>

<!-- Sidebar -->
<aside x-data="{ openDropdown: false }"
    class="w-64 bg-white/95 backdrop-blur-md h-screen shadow-2xl border-r border-gray-100 fixed left-0 top-0 flex flex-col transform transition-transform duration-300 -translate-x-full md:translate-x-0 peer-checked:translate-x-0 md:peer-checked:-translate-x-full z-40">
    <!-- Logo -->
    <div
        class="flex items-center justify-center gap-2 px-6 h-16 bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-600 border-b border-blue-400/30 shadow-lg">
        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center group">
            <div class="items-center justify-center text-xl font-bold flex gap-3">
                <div
                    class="p-1.5 bg-white/20 backdrop-blur-sm rounded-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <img src="{{ asset('img/logo/logo-bemkm-udinus.png') }}" alt="BEMKM Udinus Logo"
                        class="w-8 h-8 object-contain" />
                </div>
                <div class="leading-tight">
                    <span class="text-white drop-shadow-lg">BEMKM</span><span class="text-white/90 drop-shadow-md">
                        UDINUS</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Menu -->
    <nav class="flex-1 mt-4">
        <ul class="space-y-1.5">
            <li class="relative">
                @if (request()->routeIs('admin.dashboard'))
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center mx-4 p-2 rounded-xl group transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="shrink-0 w-4 h-4 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 font-medium">Dashboard</span>
                </a>
            </li>
            @php
                $isLandingPageActive =
                    request()->routeIs('admin.sambutan-presma.index') ||
                    request()->routeIs('admin.visi-misi.index') ||
                    request()->routeIs('admin.kabinet.index') ||
                    request()->routeIs('admin.struktural.index') ||
                    request()->routeIs('admin.struktural.unit-organisasi.index');
            @endphp
            <li class="relative" x-data="{ open: {{ $isLandingPageActive ? 'true' : 'false' }} }">
                @if ($isLandingPageActive)
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <button @click="open = !open" type="button"
                    class="flex items-center w-[224px] ml-4 mr-4 p-2 rounded-xl group transition-all duration-300 {{ $isLandingPageActive ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ $isLandingPageActive ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="shrink-0 w-4 h-4 {{ $isLandingPageActive ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                            <path d="M2 12h20" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 text-left font-medium">Landing Page</span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul x-show="open" x-transition class="mt-1.5 space-y-1 pl-4">
                    <li class="relative">
                        <a href="{{ route('admin.sambutan-presma.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.sambutan-presma.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.sambutan-presma.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-4 h-4 {{ request()->routeIs('admin.sambutan-presma.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M15 12h-5" />
                                    <path d="M15 8h-5" />
                                    <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                    <path
                                        d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2.5 text-sm font-medium">Sambutan Presma</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('admin.kabinet.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.kabinet.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.kabinet.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-3.5 h-3.5 {{ request()->routeIs('admin.kabinet.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                                    <circle cx="12" cy="11" r="4" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2 text-sm font-medium">Kabinet</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('admin.visi-misi.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.visi-misi.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.visi-misi.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-3.5 h-3.5 {{ request()->routeIs('admin.visi-misi.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 10.656V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.344" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2 text-sm font-medium">Visi & Misi</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('admin.struktural.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.struktural.index') || request()->routeIs('admin.struktural.unit-organisasi.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.struktural.index') || request()->routeIs('admin.struktural.unit-organisasi.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-3.5 h-3.5 {{ request()->routeIs('admin.struktural.index') || request()->routeIs('admin.struktural.unit-organisasi.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M16 2v2" />
                                    <path d="M17.915 22a6 6 0 0 0-12 0" />
                                    <path d="M8 2v2" />
                                    <circle cx="12" cy="12" r="4" />
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2 text-sm font-medium">Struktural</span>
                        </a>
                    </li>
                </ul>
            </li>
            @php
                $isKegiatanActive =
                    request()->routeIs('admin.program-kerja.index') || request()->routeIs('admin.pendaftaran.index');
            @endphp
            <li class="relative" x-data="{ open: {{ $isKegiatanActive ? 'true' : 'false' }} }">
                @if ($isKegiatanActive)
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <button @click="open = !open" type="button"
                    class="flex items-center w-[224px] ml-4 mr-4 p-2 rounded-xl group transition-all duration-300 {{ $isKegiatanActive ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ $isKegiatanActive ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="shrink-0 w-4 h-4 {{ $isKegiatanActive ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v2" />
                            <path d="M15.726 21.01A2 2 0 0 1 14 22H4a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2" />
                            <path d="M18 2v2" />
                            <path d="M2 13h2" />
                            <path d="M8 8h14" />
                            <rect x="8" y="3" width="14" height="14" rx="2" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 text-left font-medium">Kegiatan</span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul x-show="open" x-transition class="mt-1.5 space-y-1 pl-4">
                    <li class="relative">
                        <a href="{{ route('admin.program-kerja.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.program-kerja.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.program-kerja.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-3.5 h-3.5 {{ request()->routeIs('admin.program-kerja.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M8 2v4" />
                                    <path d="M16 2v4" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <path d="M3 10h18" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2 text-sm font-medium">Program Kerja</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('admin.pendaftaran.index') }}"
                            class="flex items-center mx-4 p-2 rounded-lg group transition-all duration-300 {{ request()->routeIs('admin.pendaftaran.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:pl-3' }}">
                            <div
                                class="flex items-center justify-center w-6 h-6 rounded-md {{ request()->routeIs('admin.pendaftaran.index') ? 'bg-white/20' : 'bg-blue-50 group-hover:bg-blue-100' }} transition-all duration-300">
                                <svg class="shrink-0 w-3.5 h-3.5 {{ request()->routeIs('admin.pendaftaran.index') ? 'text-white' : 'text-blue-600' }}"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                                    <path d="M13 5v2" />
                                    <path d="M13 17v2" />
                                    <path d="M13 11v2" />
                                </svg>
                            </div>
                            <span class="flex-1 ms-2 text-sm font-medium">Pendaftaran</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative">
                @if (request()->routeIs('admin.berita.index'))
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <a href="{{ route('admin.berita.index') }}"
                    class="flex mx-4 items-center p-2 rounded-xl group transition-all duration-300 {{ request()->routeIs('admin.berita.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ request()->routeIs('admin.berita.index') ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="shrink-0 w-4 h-4 {{ request()->routeIs('admin.berita.index') ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z" />
                            <path d="M7 11h10" />
                            <path d="M7 15h6" />
                            <path d="M7 7h8" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 font-medium">Berita</span>
                </a>
            </li>
            <li class="relative">
                @if (request()->routeIs('admin.partnership.index'))
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <a href="{{ route('admin.partnership.index') }}"
                    class="flex items-center mx-4 p-2 rounded-xl group transition-all duration-300 {{ request()->routeIs('admin.partnership.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ request()->routeIs('admin.partnership.index') ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="flex-shrink-0 w-4 h-4 {{ request()->routeIs('admin.partnership.index') ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                            <path
                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                            <path d="m21 3 1 11h-2" />
                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                            <path d="M3 4h8" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 font-medium">Partnership</span>
                </a>
            </li>
            <li class="relative">
                @if (request()->routeIs('admin.kontak.index'))
                    <span
                        class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-600 to-indigo-600 rounded-r-lg shadow-lg"></span>
                @endif
                <a href="{{ route('admin.kontak.index') }}"
                    class="flex items-center mx-4 p-2 rounded-xl group transition-all duration-300 {{ request()->routeIs('admin.kontak.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50' }}">
                    <div
                        class="flex items-center justify-center w-8 h-8 rounded-lg {{ request()->routeIs('admin.kontak.index') ? 'bg-white/20 backdrop-blur-sm' : 'bg-blue-100 group-hover:bg-blue-200' }} transition-all duration-300">
                        <svg class="w-4 h-4 {{ request()->routeIs('admin.kontak.index') ? 'text-white' : 'text-blue-600' }}"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                    </div>
                    <span class="flex-1 ms-2.5 font-medium">Kontak</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
