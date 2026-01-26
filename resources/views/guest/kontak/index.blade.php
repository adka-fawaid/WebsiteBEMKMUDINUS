@extends('guest.components.layout')

@section('content')
    <section
        class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50/50 flex items-center py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div
            class="absolute top-20 right-0 w-96 h-96 bg-gradient-to-br from-blue-400/10 to-blue-600/10 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-20 left-0 w-96 h-96 bg-gradient-to-br from-orange-400/10 to-orange-600/10 rounded-full blur-3xl">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 md:mb-16">
                <span class="inline-block text-orange-500 font-semibold text-lg uppercase tracking-wider mb-3">Hubungi
                    Kami</span>
                <h2
                    class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl mb-4">
                    Kontak BEM KM UDINUS
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Jangan ragu untuk menghubungi kami melalui berbagai platform media sosial dan kontak yang tersedia
                </p>
            </div>

            <!-- Contact Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
                @foreach ($kontaks as $kontak)
                    <a href="{{ $kontak->url }}" target="_blank"
                        class="group bg-white rounded-2xl p-6 md:p-8 border border-gray-200 shadow-lg hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                        <!-- Decorative gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-orange-500/0 group-hover:from-blue-500/5 group-hover:to-orange-500/5 transition-all duration-500">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <!-- Icon Container -->
                            <div class="mb-5">
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br 
                                    @if ($kontak->tipe === 'Telepon') from-green-500 to-green-600 shadow-green-500/30
                                    @elseif($kontak->tipe === 'Email') from-red-500 to-red-600 shadow-red-500/30
                                    @elseif($kontak->tipe === 'Instagram') from-pink-500 to-purple-600 shadow-pink-500/30
                                    @elseif($kontak->tipe === 'TikTok') from-gray-800 to-gray-900 shadow-gray-800/30
                                    @elseif($kontak->tipe === 'YouTube') from-red-600 to-red-700 shadow-red-600/30
                                    @elseif($kontak->tipe === 'LinkedIn') from-blue-600 to-blue-700 shadow-blue-600/30
                                    @else from-blue-500 to-blue-600 shadow-blue-500/30 @endif
                                    shadow-lg transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">

                                    @if ($kontak->tipe === 'Telepon')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                                        </svg>
                                    @elseif($kontak->tipe === 'Email')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                        </svg>
                                    @elseif($kontak->tipe === 'Instagram')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                    @elseif($kontak->tipe === 'TikTok')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
                                        </svg>
                                    @elseif($kontak->tipe === 'YouTube')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    @elseif($kontak->tipe === 'LinkedIn')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    @else
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z" />
                                        </svg>
                                    @endif
                                </div>
                            </div>

                            <!-- Contact Type Badge -->
                            <div class="mb-3">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide
                                    @if ($kontak->tipe === 'Telepon') bg-green-50 text-green-700
                                    @elseif($kontak->tipe === 'Email') bg-red-50 text-red-700
                                    @elseif($kontak->tipe === 'Instagram') bg-pink-50 text-pink-700
                                    @elseif($kontak->tipe === 'TikTok') bg-gray-100 text-gray-800
                                    @elseif($kontak->tipe === 'YouTube') bg-red-50 text-red-700
                                    @elseif($kontak->tipe === 'LinkedIn') bg-blue-50 text-blue-700
                                    @else bg-blue-50 text-blue-700 @endif">
                                    {{ $kontak->tipe }}
                                </span>
                            </div>

                            <!-- Contact Name -->
                            <h3 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-blue-600 transition-colors">
                                {{ $kontak->nama }}
                            </h3>

                            <!-- Divider -->
                            <div class="w-12 h-0.5 bg-orange-500 rounded-full mb-3"></div>

                            <!-- Contact Info -->
                            <p class="text-gray-600 text-sm md:text-base font-medium mb-4">
                                {{ $kontak->kontak }}
                            </p>

                            <!-- Link Indicator -->
                            <div
                                class="flex items-center gap-2 text-blue-600 font-semibold text-sm group-hover:gap-3 transition-all">
                                <span>Hubungi Kami</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Bottom Border Animation -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r 
                            @if ($kontak->tipe === 'Telepon') from-green-500 to-green-600
                            @elseif($kontak->tipe === 'Email') from-red-500 to-red-600
                            @elseif($kontak->tipe === 'Instagram') from-pink-500 to-purple-600
                            @elseif($kontak->tipe === 'TikTok') from-gray-800 to-gray-900
                            @elseif($kontak->tipe === 'YouTube') from-red-600 to-red-700
                            @elseif($kontak->tipe === 'LinkedIn') from-blue-600 to-blue-700
                            @else from-blue-500 to-orange-500 @endif
                            transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Location Section -->
            <div class="mt-16 md:mt-20">
                <div class="text-center mb-8">
                    <h3
                        class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-2xl md:text-3xl lg:text-4xl mb-3">
                        Lokasi Kami
                    </h3>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-3"></div>
                    <p class="text-gray-600 text-sm md:text-base">
                        Universitas Dian Nuswantoro Semarang
                    </p>
                </div>

                <!-- Google Maps Embed -->
                <div
                    class="relative bg-white rounded-3xl overflow-hidden shadow-2xl shadow-blue-500/10 border border-gray-200 transform transition-all duration-500 hover:shadow-3xl hover:shadow-blue-500/20">
                    <div class="aspect-video md:aspect-[21/9]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2989080125634!2d110.40823931477456!3d-6.982486794957668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e4d9b0b5b0b0b0b!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="w-full h-full">
                        </iframe>
                    </div>

                    <!-- Map Overlay Info Card -->
                    <div
                        class="absolute bottom-6 left-6 right-6 md:left-8 md:bottom-8 md:right-auto md:max-w-sm bg-white/95 backdrop-blur-md rounded-2xl p-4 md:p-6 shadow-xl border border-gray-200">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-800 text-base md:text-lg mb-1">UDINUS Semarang</h4>
                                <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                    Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa
                                    Tengah 50131
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decorative Divider -->
            <div class="flex items-center justify-center mt-16 md:mt-20">
                <div class="flex-1 h-px bg-gradient-to-r from-transparent to-orange-500 max-w-xs"></div>
                <div class="w-4 h-4 mx-4 bg-orange-500 rotate-45 transform origin-center"></div>
                <div class="flex-1 h-px bg-gradient-to-l from-transparent to-orange-500 max-w-xs"></div>
            </div>
        </div>
    </section>
@endsection
