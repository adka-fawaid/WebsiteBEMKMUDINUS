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
                <a href="/"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->is('/') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    @if (request()->is('/'))
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Beranda
                        </span>
                    @else
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Beranda
                        </span>
                    @endif
                </a>

                @php
                    $isProfilActive =
                        request()->routeIs('guest.profil.kabinet') || request()->routeIs('guest.profil.struktural');
                @endphp

                <!-- Dropdown Profil -->
                <div x-data="{ profilOpen: false }" @click.away="profilOpen = false" class="relative">
                    <button @click="profilOpen = !profilOpen"
                        class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                              {{ $isProfilActive ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                        @if ($isProfilActive)
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg"></span>
                            <span class="relative flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        @else
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <span class="relative flex items-center gap-2">
                                <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
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
                        @endif
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="profilOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50">
                        <a href="{{ route('guest.profil.kabinet') }}"
                            class="block px-4 py-3 text-sm font-medium transition-all duration-300
                                  {{ request()->routeIs('guest.profil.kabinet') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                                Kabinet
                            </div>
                        </a>
                        <a href="{{ route('guest.profil.struktural') }}"
                            class="block px-4 py-3 text-sm font-medium transition-all duration-300
                                  {{ request()->routeIs('guest.profil.struktural') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                Struktural
                            </div>
                        </a>
                    </div>
                </div>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeDNiL7fvSjR2IHC3DDOpwghKzlBshTjA0eZ9YRZGGUSWX3Bg/viewform"
                    target="_blank"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm text-gray-700 hover:text-blue-600 transition-all duration-300 group">
                    <span
                        class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Partnership
                    </span>
                </a>

                <a href="/berita"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->is('berita*') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    @if (request()->is('berita*'))
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            Content
                        </span>
                    @else
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            Content
                        </span>
                    @endif
                </a>

                <a href="/foto"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm transition-all duration-300 group
                          {{ request()->is('foto*') ? 'text-white' : 'text-gray-700 hover:text-blue-600' }}">
                    @if (request()->is('foto*'))
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Kegiatan
                        </span>
                    @else
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative flex items-center gap-2">
                            <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Kegiatan
                        </span>
                    @endif
                </a>

                <a href="https://sites.google.com/mhs.dinus.ac.id/kalenderkm" target="_blank"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm text-gray-700 hover:text-blue-600 transition-all duration-300 group">
                    <span
                        class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Kalender
                    </span>
                </a>

                <a href="https://wa.me/895710034499" target="_blank"
                    class="relative px-3 py-2.5 rounded-xl font-medium text-sm text-gray-700 hover:text-blue-600 transition-all duration-300 group">
                    <span
                        class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        <svg class="w-4 h-4 transition-transform group-hover:scale-110" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
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
                    <a href="{{ route('guest.profil.kabinet') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition-all duration-300
                              {{ request()->routeIs('guest.profil.kabinet') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        Kabinet
                    </a>
                    <a href="{{ route('guest.profil.struktural') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition-all duration-300
                              {{ request()->routeIs('guest.profil.struktural') ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md' : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Struktural
                    </a>
                </div>
            </div>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeDNiL7fvSjR2IHC3DDOpwghKzlBshTjA0eZ9YRZGGUSWX3Bg/viewform"
                target="_blank"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Partnership
            </a>

            <a href="/berita"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->is('berita*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Content
            </a>

            <a href="/foto"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-300
                      {{ request()->is('foto*') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Kegiatan
            </a>

            <a href="https://sites.google.com/mhs.dinus.ac.id/kalenderkm" target="_blank"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Kalender
            </a>

            <a href="https://wa.me/895710034499" target="_blank"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 hover:text-blue-600 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Kontak
            </a>
        </div>
    </div>
</nav>
<!-- Navbar -->
