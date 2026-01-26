@extends('guest.components.layout')

@section('content')
    <section id="berita"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-white py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
            <!-- Header -->
            <div class="mb-6 md:mb-8 text-center mt-5">
                <h1
                    class="font-bold mb-3 bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl">
                    Berita BEM KM UDINUS
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Informasi lengkap tentang kegiatan, acara, dan berita seputar BEM KM UDINUS
                </p>
            </div>

            <!-- Search & Filter -->
            <div class="mb-8">
                <form method="GET" action="{{ route('guest.berita.index') }}" class="max-w-4xl mx-auto">
                    <div class="flex flex-col md:flex-row gap-4">
                        <!-- Search Input -->
                        <div class="flex-1 relative">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari berita..."
                                class="w-full px-5 py-3.5 pl-12 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-gray-700 placeholder-gray-400">
                            <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        <!-- Category Filter -->
                        <div class="md:w-64">
                            <select name="kategori"
                                class="w-full pl-5 pr-10 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-gray-700 bg-white cursor-pointer appearance-none"
                                style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 24 24%27 stroke=%27%236b7280%27%3E%3Cpath stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%272%27 d=%27M19 9l-7 7-7-7%27/%3E%3C/svg%3E'); background-position: right 0.75rem center; background-repeat: no-repeat; background-size: 1.25rem;"
                                onchange="this.form.submit()">
                                <option value="">Semua Kategori</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori }}"
                                        {{ request('kategori') == $kategori ? 'selected' : '' }}>
                                        {{ $kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Search Button -->
                        <button type="submit"
                            class="px-8 py-3.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span>Cari</span>
                        </button>
                    </div>

                    <!-- Active Filters -->
                    @if (request('search') || request('kategori'))
                        <div class="mt-4 flex items-center gap-3 flex-wrap">
                            <span class="text-sm text-gray-600 font-medium">Filter aktif:</span>
                            @if (request('search'))
                                <a href="{{ route('guest.berita.index', ['kategori' => request('kategori')]) }}"
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium hover:bg-blue-200 transition-colors duration-300">
                                    <span>{{ request('search') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </a>
                            @endif
                            @if (request('kategori'))
                                <a href="{{ route('guest.berita.index', ['search' => request('search')]) }}"
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 text-orange-700 rounded-lg text-sm font-medium hover:bg-orange-200 transition-colors duration-300">
                                    <span>{{ request('kategori') }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </a>
                            @endif
                            <a href="{{ route('guest.berita.index') }}"
                                class="text-sm text-gray-500 hover:text-gray-700 font-medium underline">
                                Hapus semua filter
                            </a>
                        </div>
                    @endif
                </form>
            </div>

            <!-- Berita Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @forelse ($beritas as $berita)
                    <div class="group">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-lg hover:shadow-2xl relative transform transition-all duration-500 hover:-translate-y-2">
                            <!-- Image Container -->
                            <div class="relative overflow-hidden aspect-square">
                                <img src="{{ asset('storage/img/berita/' . $berita->gambar) }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                    alt="{{ $berita->judul }}">
                                <!-- Gradient Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <!-- Badge -->
                                <div
                                    class="absolute left-4 top-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold px-4 py-2.5 rounded-xl leading-tight text-xs shadow-xl shadow-orange-500/50 transform group-hover:scale-110 transition-transform duration-300">
                                    {{ $berita->kategori }}
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-4 md:p-5">
                                <h3
                                    class="font-bold text-gray-800 text-base md:text-lg mb-2 group-hover:text-blue-600 transition-colors duration-300 line-clamp-2 h-12 md:h-14">
                                    {{ $berita->judul }}
                                </h3>
                                <div class="flex items-center gap-2 text-gray-500 text-sm mb-4 h-5">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="truncate">{{ $berita->created_at->format('d M Y') }}</span>
                                </div>

                                <!-- Read More Button -->
                                <a href="{{ route('guest.berita.detail', $berita->slug) }}"
                                    class="flex items-center gap-2 text-blue-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                    <span>Baca Selengkapnya</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform flex-shrink-0"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Decorative Border -->
                            <div
                                class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-gray-700 font-bold text-lg mb-2">Belum Ada Berita</h3>
                        <p class="text-gray-500 text-sm">Berita akan segera hadir</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
