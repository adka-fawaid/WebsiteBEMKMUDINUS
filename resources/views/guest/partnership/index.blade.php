@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto px-4 md:px-6 max-w-[1600px]">
            <!-- Header -->
            <div class="text-center mt-5 mb-5 md:mb-6">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span
                        class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Kategori Partnership
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Berbagai pilihan kerja sama dengan BEM KM UDINUS
                </p>
            </div>

            <!-- Partnership Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-8">
                @foreach ($partnerships as $partnership)
                    @php
                        $colors = match ($partnership->kategori) {
                            'Media Partner' => [
                                'glow' => 'from-blue-400 to-cyan-400',
                                'card' => 'bg-white shadow-blue-100/50 border-blue-100 hover:border-blue-200',
                                'corner' => 'from-blue-400/10',
                                'iconBg' => 'from-blue-500 to-blue-600 shadow-blue-200/50',
                                'badge' => 'bg-blue-50 text-blue-600 border-blue-200',
                                'button' => 'from-blue-600 to-blue-700 shadow-blue-500/30 hover:shadow-blue-500/50',
                                'icon' => 'text-white',
                                'text' => 'text-blue-600',
                            ],
                            'Sponsorship' => [
                                'glow' => 'from-purple-400 to-pink-400',
                                'card' => 'bg-white shadow-purple-100/50 border-purple-100 hover:border-purple-200',
                                'corner' => 'from-purple-400/10',
                                'iconBg' => 'from-purple-500 to-purple-600 shadow-purple-200/50',
                                'badge' => 'bg-purple-50 text-purple-600 border-purple-200',
                                'button' =>
                                    'from-purple-600 to-purple-700 shadow-purple-500/30 hover:shadow-purple-500/50',
                                'text' => 'text-purple-600',
                                'icon' => 'text-white',
                            ],
                            'Kolaborasi' => [
                                'glow' => 'from-green-400 to-emerald-400',
                                'card' => 'bg-white shadow-green-100/50 border-green-100 hover:border-green-200',
                                'corner' => 'from-green-400/10',
                                'iconBg' => 'from-green-500 to-green-600 shadow-green-200/50',
                                'badge' => 'bg-green-50 text-green-600 border-green-200',
                                'button' => 'from-green-600 to-green-700 shadow-green-500/30 hover:shadow-green-500/50',
                                'text' => 'text-green-600',
                                'icon' => 'text-white',
                            ],
                            'Kampus Visit' => [
                                'glow' => 'from-amber-400 to-orange-400',
                                'card' => 'bg-white shadow-amber-100/50 border-amber-100 hover:border-amber-200',
                                'corner' => 'from-amber-400/10',
                                'iconBg' => 'from-amber-500 to-amber-600 shadow-amber-200/50',
                                'badge' => 'bg-amber-50 text-amber-600 border-amber-200',
                                'button' => 'from-amber-600 to-amber-700 shadow-amber-500/30 hover:shadow-amber-500/50',
                                'text' => 'text-amber-600',
                                'icon' => 'text-white',
                            ],
                            'Delegasi' => [
                                'glow' => 'from-pink-400 to-rose-400',
                                'card' => 'bg-white shadow-pink-100/50 border-pink-100 hover:border-pink-200',
                                'corner' => 'from-pink-400/10',
                                'iconBg' => 'from-pink-500 to-pink-600 shadow-pink-200/50',
                                'badge' => 'bg-pink-50 text-pink-600 border-pink-200',
                                'button' => 'from-pink-600 to-pink-700 shadow-pink-500/30 hover:shadow-pink-500/50',
                                'icon' => 'text-white',
                                'text' => 'text-pink-600',
                            ],
                            default => [
                                'glow' => 'from-gray-400 to-slate-400',
                                'card' => 'bg-white shadow-gray-100/50 border-gray-100 hover:border-gray-200',
                                'corner' => 'from-gray-400/10',
                                'iconBg' => 'from-gray-500 to-gray-600 shadow-gray-200/50',
                                'badge' => 'bg-gray-50 text-gray-600 border-gray-200',
                                'button' => 'from-gray-600 to-gray-700 shadow-gray-500/30 hover:shadow-gray-500/50',
                                'icon' => 'text-white',
                                'text' => 'text-gray-600',
                            ],
                        };
                    @endphp
                    <div class="group relative">
                        <!-- Glow Effect Background -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r {{ $colors['glow'] }} rounded-[2rem] opacity-0 group-hover:opacity-20 blur-xl transition-all duration-700">
                        </div>

                        <!-- Main Card -->
                        <div
                            class="relative {{ $colors['card'] }} rounded-[2rem] p-8 shadow-xl border transition-all duration-500 hover:-translate-y-2 h-full flex flex-col">
                            <!-- Decorative Corner Element -->
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br {{ $colors['corner'] }} to-transparent rounded-bl-[5rem] rounded-tr-[2rem]">
                            </div>

                            <!-- Header -->
                            <div class="relative mb-6">
                                <div class="flex items-start justify-between mb-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-14 h-14 bg-gradient-to-br {{ $colors['iconBg'] }} rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            @if ($partnership->kategori === 'Media Partner')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="{{ $colors['icon'] }}">
                                                    <path d="m17 2-5 5-5-5" />
                                                    <rect width="20" height="15" x="2" y="7" rx="2" />
                                                </svg>
                                            @elseif($partnership->kategori === 'Sponsorship')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="{{ $colors['icon'] }}">
                                                    <path
                                                        d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                                    <path d="M12 18V6" />
                                                </svg>
                                            @elseif($partnership->kategori === 'Kolaborasi')
                                                <svg class="w-7 h-7 {{ $colors['icon'] }}"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.5 1.1 2.97 2.65 2.97 4.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                                </svg>
                                            @elseif($partnership->kategori === 'Kampus Visit')
                                                <svg class="w-7 h-7 {{ $colors['icon'] }}"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6.18L23 9 12 3z" />
                                                </svg>
                                            @elseif($partnership->kategori === 'Delegasi')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="{{ $colors['icon'] }}">
                                                    <path d="M2 21a8 8 0 0 1 13.292-6" />
                                                    <circle cx="10" cy="8" r="5" />
                                                    <path d="M19 16v6" />
                                                    <path d="M22 19h-6" />
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Badge -->
                                <div class="mb-4">
                                    <span
                                        class="inline-block {{ $colors['badge'] }} text-sm font-bold px-4 py-2 rounded-full border">
                                        {{ $partnership->kategori }}
                                    </span>
                                </div>

                                <!-- Description -->
                                @php
                                    $isLongDesc = strlen($partnership['deskripsi']) > 100;
                                @endphp
                                <div class="deskripsi-content-{{ $loop->index }}">
                                    <p class="text-gray-600 text-base leading-relaxed">
                                        <span class="short-text">{{ Str::limit($partnership['deskripsi'], 100) }}</span>
                                        @if ($isLongDesc)
                                            <span class="full-text hidden">{{ $partnership['deskripsi'] }}</span>
                                        @endif
                                    </p>
                                    @if ($isLongDesc)
                                        <button onclick="toggleDeskripsi({{ $loop->index }})"
                                            class="mt-2 text-sm font-semibold {{ $colors['text'] ?? 'text-blue-600' }} hover:underline focus:outline-none flex items-center gap-1 transition-all">
                                            <span class="toggle-text">Selengkapnya</span>
                                            <svg class="w-4 h-4 toggle-icon transition-transform" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <div class="mt-auto pt-6">
                                @php
                                    $routeUrl = match ($partnership->kategori) {
                                        'Media Partner' => route('guest.partnership.media-partner.index'),
                                        'Sponsorship' => route('guest.partnership.prosedur.index', [
                                            'kategori' => 'sponsorship',
                                        ]),
                                        'Kolaborasi' => route('guest.partnership.prosedur.index', [
                                            'kategori' => 'kolaborasi',
                                        ]),
                                        'Kampus Visit' => route('guest.partnership.prosedur.index', [
                                            'kategori' => 'kampus-visit',
                                        ]),
                                        'Delegasi' => route('guest.partnership.prosedur.index', [
                                            'kategori' => 'delegasi',
                                        ]),
                                        default => '#',
                                    };
                                @endphp
                                <a href="{{ $routeUrl }}"
                                    class="group/btn flex items-center justify-center gap-2 w-full bg-gradient-to-r {{ $colors['button'] }} text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 shadow-lg hover:scale-[1.02]">
                                    <span>Lihat Prosedur</span>
                                    <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Toggle Script -->
    <script>
        function toggleDeskripsi(index) {
            const container = document.querySelector(`.deskripsi-content-${index}`);
            const shortText = container.querySelector('.short-text');
            const fullText = container.querySelector('.full-text');
            const toggleText = container.querySelector('.toggle-text');
            const toggleIcon = container.querySelector('.toggle-icon');

            if (fullText.classList.contains('hidden')) {
                shortText.classList.add('hidden');
                fullText.classList.remove('hidden');
                toggleText.textContent = 'Sembunyikan';
                toggleIcon.style.transform = 'rotate(180deg)';
            } else {
                shortText.classList.remove('hidden');
                fullText.classList.add('hidden');
                toggleText.textContent = 'Selengkapnya';
                toggleIcon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
@endsection
