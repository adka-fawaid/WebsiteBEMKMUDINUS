@extends('guest.components.layout')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-16">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Header -->
        <div class="text-center mb-6 pt-8">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Kategori <span class="text-blue-600">Partnership</span>
            </h1>
            <p class="text-lg text-gray-600">
                Berbagai pilihan kerja sama yang dapat Anda lakukan dengan BEM-KM UDINUS
            </p>
        </div>

        <!-- Partnership Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
                $partnerships = [
                    [
                        'kategori' => 'Media Partner',
                        'deskripsi' => 'Kerja Sama Media merupakan kegiatan kerja sama dalam bidang promosi media berupa postingan story instagram.',
                        'color' => 'blue'
                    ],
                    [
                        'kategori' => 'Sponsorship',
                        'deskripsi' => 'Kerja Sama Konkret merupakan kegiatan menjalin kerja sama kolaborasi, sponsorship secara profesional dengan mitra yang relevan dengan BEM-KM UDINUS.',
                        'color' => 'purple'
                    ],
                    [
                        'kategori' => 'Kolaborasi',
                        'deskripsi' => 'Kolaborasi merupakan kegiatan menjalin kerja sama kolaborasi, sponsorship secara profesional dengan mitra yang relevan dengan BEM-KM UDINUS.',
                        'color' => 'green'
                    ],
                    [
                        'kategori' => 'Kampus Visit',
                        'deskripsi' => 'Kampus Visit merupakan kegiatan study banding dengan BEM-KM UDINUS yang dilakukan di UDINUS untuk mengenal budaya, bertukar ide dan pendapat, sehingga mendapatkan output yang bermanfaat baik untuk mitra dan BEM-KM UDINUS.',
                        'color' => 'amber'
                    ],
                    [
                        'kategori' => 'Delegasi',
                        'deskripsi' => 'Delegasi merupakan kegiatan menghadiri event tertentu yang dilakukan oleh BEM-KM UDINUS untuk membantu mensukseskan event tersebut.',
                        'color' => 'pink'
                    ],
                ];
            @endphp

            @foreach($partnerships as $partnership)
                @php
                    $colorMap = [
                        'blue' => 'bg-blue-50 border-blue-200 hover:shadow-blue-200',
                        'green' => 'bg-green-50 border-green-200 hover:shadow-green-200',
                        'purple' => 'bg-purple-50 border-purple-200 hover:shadow-purple-200',
                        'amber' => 'bg-amber-50 border-amber-200 hover:shadow-amber-200',
                        'pink' => 'bg-pink-50 border-pink-200 hover:shadow-pink-200',
                    ];
                    $badgeColorMap = [
                        'blue' => 'bg-blue-100 text-blue-700',
                        'green' => 'bg-green-100 text-green-700',
                        'purple' => 'bg-purple-100 text-purple-700',
                        'amber' => 'bg-amber-100 text-amber-700',
                        'pink' => 'bg-pink-100 text-pink-700',
                    ];
                    $textColorMap = [
                        'blue' => 'text-blue-600 hover:text-blue-700',
                        'green' => 'text-green-600 hover:text-green-700',
                        'purple' => 'text-purple-600 hover:text-purple-700',
                        'amber' => 'text-amber-600 hover:text-amber-700',
                        'pink' => 'text-pink-600 hover:text-pink-700',
                    ];
                @endphp
                <a href="#" class="group {{ $colorMap[$partnership['color']] }} border rounded-lg p-6 transition-all duration-300 hover:shadow-lg hover:scale-105 block h-full">
                    <!-- Icon -->
                    <div class="mb-4">
                        @if($partnership['kategori'] === 'Media Partner')
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                <path d="m17 2-5 5-5-5"/>
                                <rect width="20" height="15" x="2" y="7" rx="2"/>
                            </svg>
                        @elseif($partnership['kategori'] === 'Sponsorship')
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-purple-600">
                                <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/>
                                <path d="M12 18V6"/>
                            </svg>
                        @elseif($partnership['kategori'] === 'Kolaborasi')
                            <svg class="w-10 h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.5 1.1 2.97 2.65 2.97 4.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                            </svg>
                        @elseif($partnership['kategori'] === 'Kampus Visit')
                            <svg class="w-10 h-10 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6.18L23 9 12 3z"/>
                            </svg>
                        @elseif($partnership['kategori'] === 'Delegasi')
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-600">
                                <path d="M2 21a8 8 0 0 1 13.292-6"/>
                                <circle cx="10" cy="8" r="5"/>
                                <path d="M19 16v6"/>
                                <path d="M22 19h-6"/>
                            </svg>
                        @endif
                    </div>

                    <!-- Badge -->
                    <div class="mb-3">
                        <span class="inline-block {{ $badgeColorMap[$partnership['color']] }} text-sm font-bold px-4 py-2 rounded-full">
                            {{ $partnership['kategori'] }}
                        </span>
                    </div>

                    <!-- Description -->
                    <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">
                        {{ $partnership['deskripsi'] }}
                    </p>

                    <!-- CTA Link -->
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <span class="inline-flex items-center text-sm font-semibold {{ $textColorMap[$partnership['color']] }} transition-colors">
                            Pelajari Lebih Lanjut
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection