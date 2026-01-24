<!-- Navbar -->
<nav x-data="{ mobileMenuOpen: false }"
    class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-2 sm:px-3 lg:px-4">
        <div class="flex items-center justify-between h-20">

            <!-- Logo Section -->
            <div class="flex items-center gap-3 group">
                <a href="/" class="transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('img/logo/logo-bemkm-transparan.png') }}" class="h-16 w-16 object-contain"
                        alt="BEMKM Logo">
                </a>
                <a href="/" class="transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('img/logo/logo-kabinet-transparan.png') }}" class="h-14 w-14 object-contain"
                        alt="Aksa Sinergi Logo">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-0.5">
                <a href="{{ route('guest.beranda.index') }}"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->routeIs('guest.beranda.index') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    <span
                        class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ request()->routeIs('guest.beranda.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 {{ request()->routeIs('guest.beranda.index') ? '' : 'transition-transform group-hover:scale-110' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Beranda
                    </span>
                </a>

                @php
                    $isProfilActive =
                        request()->routeIs('guest.profil.kabinet.index') ||
                        request()->routeIs('guest.profil.struktural.index');
                @endphp

                <!-- Dropdown Profil -->
                <div x-data="{ profilOpen: false }" @click.away="profilOpen = false" class="relative">
                    <button @click="profilOpen = !profilOpen"
                        class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                              {{ $isProfilActive ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                        <span
                            class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ $isProfilActive ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4 {{ $isProfilActive ? '' : 'transition-transform group-hover:scale-110' }}"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profil
                            <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': profilOpen }"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="profilOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50">
                        <a href="{{ route('guest.profil.kabinet.index') }}"
                            class="block px-4 py-3 text-sm font-medium transition-all duration-300
                                  {{ request()->routeIs('guest.profil.kabinet.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                            <div class="flex items-center gap-3">
                                <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                                    <circle cx="12" cy="11" r="4" />
                                </svg>
                                Kabinet
                            </div>
                        </a>
                        <a href="{{ route('guest.profil.struktural.index') }}"
                            class="block px-4 py-3 text-sm font-medium transition-all duration-300
                                  {{ request()->routeIs('guest.profil.struktural.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Struktural
                            </div>
                        </a>
                    </div>
                </div>

                <a href="{{ route('guest.kegiatan.index') }}"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->routeIs('guest.kegiatan.index') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    <span
                        class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ request()->routeIs('guest.kegiatan.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 2v2" />
                            <path d="M15.726 21.01A2 2 0 0 1 14 22H4a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2" />
                            <path d="M18 2v2" />
                            <path d="M2 13h2" />
                            <path d="M8 8h14" />
                            <rect x="8" y="3" width="14" height="14" rx="2" />
                        </svg>
                        Kegiatan
                    </span>
                </a>

                <a href="{{ route('guest.berita.index') }}"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->routeIs('guest.berita.*') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    <span
                        class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ request()->routeIs('guest.berita.*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 {{ request()->routeIs('guest.berita.*') ? '' : 'transition-transform group-hover:scale-110' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        Berita
                    </span>
                </a>

                <a href="{{ route('guest.partnership.index') }}"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->routeIs('guest.partnership.*') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    <span
                        class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ request()->routeIs('guest.partnership.*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                            <path
                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                            <path d="m21 3 1 11h-2" />
                            <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                            <path d="M3 4h8" />
                        </svg>
                        Partnership
                    </span>
                </a>

                <a href="{{ route('guest.kontak.index') }}"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->routeIs('guest.kontak.index') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    <span
                        class="absolute inset-0 rounded-xl transition-opacity duration-300 {{ request()->routeIs('guest.kontak.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 shadow-lg' : 'bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100' }}"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 {{ request()->routeIs('guest.kontak.index') ? '' : 'transition-transform group-hover:scale-110' }}"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Kontak
                    </span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="lg:hidden p-2 rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden border-t border-gray-100 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="px-4 py-3 space-y-1">
            <a href="/"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->is('/') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Beranda
            </a>

            <!-- Mobile Dropdown Profil -->
            <div x-data="{ profilMobileOpen: false }">
                <button @click="profilMobileOpen = !profilMobileOpen"
                    class="w-full flex items-center justify-between gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                          {{ $isProfilActive ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profil
                    </div>
                    <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': profilMobileOpen }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="profilMobileOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2" class="ml-4 mt-1 space-y-1">
                    <a href="{{ route('guest.profil.kabinet.index') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition-all duration-300
                              {{ request()->routeIs('guest.profil.kabinet.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                        <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                            <circle cx="12" cy="11" r="4" />
                        </svg>
                        Kabinet
                    </a>
                    <a href="{{ route('guest.profil.struktural.index') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition-all duration-300
                              {{ request()->routeIs('guest.profil.struktural.index') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Struktural
                    </a>
                </div>
            </div>

            <a href="{{ route('guest.kegiatan.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->routeIs('guest.kegiatan.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2v2" />
                    <path d="M15.726 21.01A2 2 0 0 1 14 22H4a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2" />
                    <path d="M18 2v2" />
                    <path d="M2 13h2" />
                    <path d="M8 8h14" />
                    <rect x="8" y="3" width="14" height="14" rx="2" />
                </svg>
                Kegiatan
            </a>


            <a href="{{ route('guest.berita.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->routeIs('guest.berita.*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Berita
            </a>

            <a href="{{ route('guest.partnership.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->routeIs('guest.partnership.*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                    <path
                        d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                    <path d="m21 3 1 11h-2" />
                    <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                    <path d="M3 4h8" />
                </svg>
                Partnership
            </a>

            <a href="{{ route('guest.kontak.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->routeIs('guest.kontak.index') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="w-4 h-4 {{ request()->routeIs('guest.kontak.index') ? '' : 'transition-transform group-hover:scale-110' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
            </a>
        </div>
    </div>
</nav>
