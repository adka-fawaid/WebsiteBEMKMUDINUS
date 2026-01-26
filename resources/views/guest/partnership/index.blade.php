@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-b from-blue-50 to-white py-16">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Header -->
            <div class="text-center mt-4 mb-8 md:mb-12 pt-10">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Kategori Partnership
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Berbagai pilihan kerja sama dengan BEM KM UDINUS
                </p>
            </div>

            <!-- Partnership Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach ($partnerships as $partnership)
                    @php
                        $colors = match ($partnership->kategori) {
                            'Media Partner' => [
                                'card' => 'bg-blue-50 border-blue-200 hover:shadow-blue-200',
                                'badge' => 'bg-blue-100 text-blue-700',
                                'text' => 'text-blue-600 hover:text-blue-700',
                                'icon' => 'text-blue-600',
                            ],
                            'Sponsorship' => [
                                'card' => 'bg-purple-50 border-purple-200 hover:shadow-purple-200',
                                'badge' => 'bg-purple-100 text-purple-700',
                                'text' => 'text-purple-600 hover:text-purple-700',
                                'icon' => 'text-purple-600',
                            ],
                            'Kolaborasi' => [
                                'card' => 'bg-green-50 border-green-200 hover:shadow-green-200',
                                'badge' => 'bg-green-100 text-green-700',
                                'text' => 'text-green-600 hover:text-green-700',
                                'icon' => 'text-green-600',
                            ],
                            'Kampus Visit' => [
                                'card' => 'bg-amber-50 border-amber-200 hover:shadow-amber-200',
                                'badge' => 'bg-amber-100 text-amber-700',
                                'text' => 'text-amber-600 hover:text-amber-700',
                                'icon' => 'text-amber-600',
                            ],
                            'Delegasi' => [
                                'card' => 'bg-pink-50 border-pink-200 hover:shadow-pink-200',
                                'badge' => 'bg-pink-100 text-pink-700',
                                'text' => 'text-pink-600 hover:text-pink-700',
                                'icon' => 'text-pink-600',
                            ],
                            default => [
                                'card' => 'bg-gray-50 border-gray-200 hover:shadow-gray-200',
                                'badge' => 'bg-gray-100 text-gray-700',
                                'text' => 'text-gray-600 hover:text-gray-700',
                                'icon' => 'text-gray-600',
                            ],
                        };
                    @endphp
                    <div
                        class="{{ $colors['card'] }} border rounded-lg p-6 transition-all duration-300 hover:shadow-lg hover:scale-105 h-full">
                        <!-- Icon -->
                        <div class="mb-4">
                            @if ($partnership->kategori === 'Media Partner')
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="{{ $colors['icon'] }}">
                                    <path d="m17 2-5 5-5-5" />
                                    <rect width="20" height="15" x="2" y="7" rx="2" />
                                </svg>
                            @elseif($partnership->kategori === 'Sponsorship')
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="{{ $colors['icon'] }}">
                                    <path
                                        d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                    <path d="M12 18V6" />
                                </svg>
                            @elseif($partnership->kategori === 'Kolaborasi')
                                <svg class="w-10 h-10 {{ $colors['icon'] }}" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.5 1.1 2.97 2.65 2.97 4.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                </svg>
                            @elseif($partnership->kategori === 'Kampus Visit')
                                <svg class="w-10 h-10 {{ $colors['icon'] }}" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6.18L23 9 12 3z" />
                                </svg>
                            @elseif($partnership->kategori === 'Delegasi')
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="{{ $colors['icon'] }}">
                                    <path d="M2 21a8 8 0 0 1 13.292-6" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M19 16v6" />
                                    <path d="M22 19h-6" />
                                </svg>
                            @endif
                        </div>

                        <!-- Badge -->
                        <div class="mb-3">
                            <span class="inline-block {{ $colors['badge'] }} text-sm font-bold px-4 py-2 rounded-full">
                                {{ $partnership->kategori }}
                            </span>
                        </div>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                            {{ $partnership['deskripsi'] }}
                        </p>

                        <!-- CTA Link -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <a href="{{ $partnership->kategori === 'Media Partner' ? route('guest.partnership.media-partner.index') : route('guest.partnership.prosedur.index') }}"
                                class="group inline-flex items-center text-sm font-semibold {{ $colors['text'] }} transition-colors">
                                Informasi Lebih Lanjut
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
