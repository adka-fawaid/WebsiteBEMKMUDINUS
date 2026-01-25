<section
    class="min-h-screen bg-gradient-to-br from-orange-50/50 via-white to-blue-50/30 flex items-center py-16 md:py-20 lg:py-24 relative overflow-hidden">
    <!-- Decorative Background -->
    <div
        class="absolute top-20 left-0 w-96 h-96 bg-gradient-to-br from-orange-400/10 to-orange-600/10 rounded-full blur-3xl">
    </div>
    <div
        class="absolute bottom-20 right-0 w-96 h-96 bg-gradient-to-br from-blue-400/10 to-blue-600/10 rounded-full blur-3xl">
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">

        {{-- JUDUL TENGAH SECTION --}}
        <div class="text-center mb-5 md:mb-7">
            <span class="inline-block text-orange-500 font-semibold text-lg uppercase tracking-wider mb-2">Filosofi
                Kabinet</span>
            <h2
                class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl mb-4">
                KABINET {{ $kabinet->nama }}
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            {{-- KOLOM KIRI: MAKNA LOGO & FILOSOFI WARNA --}}
            <div class="space-y-7">
                {{-- MAKNA LOGO --}}
                <div>
                    <h3
                        class="font-bold text-center lg:text-left mb-4 text-gray-800 text-xl md:text-2xl flex items-center gap-3">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-blue-700 rounded-full"></span>
                        MAKNA SIMBOL
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @php
                            $simbolColors = [
                                [
                                    'name' => 'red',
                                    'from' => 'from-red-500',
                                    'to' => 'to-red-700',
                                    'border' => 'hover:border-red-300',
                                    'shadow' => 'hover:shadow-red-500/10',
                                    'text' => 'text-red-700',
                                    'shadowIcon' => 'shadow-red-500/30',
                                ],
                                [
                                    'name' => 'blue',
                                    'from' => 'from-blue-500',
                                    'to' => 'to-blue-700',
                                    'border' => 'hover:border-blue-300',
                                    'shadow' => 'hover:shadow-blue-500/10',
                                    'text' => 'text-blue-700',
                                    'shadowIcon' => 'shadow-blue-500/30',
                                ],
                                [
                                    'name' => 'orange',
                                    'from' => 'from-orange-500',
                                    'to' => 'to-orange-600',
                                    'border' => 'hover:border-orange-300',
                                    'shadow' => 'hover:shadow-orange-500/10',
                                    'text' => 'text-orange-600',
                                    'shadowIcon' => 'shadow-orange-500/30',
                                ],
                                [
                                    'name' => 'yellow',
                                    'from' => 'from-yellow-500',
                                    'to' => 'to-yellow-600',
                                    'border' => 'hover:border-yellow-300',
                                    'shadow' => 'hover:shadow-yellow-500/10',
                                    'text' => 'text-yellow-600',
                                    'shadowIcon' => 'shadow-yellow-500/30',
                                ],
                                [
                                    'name' => 'purple',
                                    'from' => 'from-purple-500',
                                    'to' => 'to-purple-700',
                                    'border' => 'hover:border-purple-300',
                                    'shadow' => 'hover:shadow-purple-500/10',
                                    'text' => 'text-purple-700',
                                    'shadowIcon' => 'shadow-purple-500/30',
                                ],
                                [
                                    'name' => 'green',
                                    'from' => 'from-green-500',
                                    'to' => 'to-green-700',
                                    'border' => 'hover:border-green-300',
                                    'shadow' => 'hover:shadow-green-500/10',
                                    'text' => 'text-green-700',
                                    'shadowIcon' => 'shadow-green-500/30',
                                ],
                            ];
                        @endphp

                        @foreach ($maknaSimbolList as $index => $simbol)
                            @php
                                $color = $simbolColors[$index % count($simbolColors)];
                            @endphp
                            <div
                                class="group bg-white rounded-xl p-3 md:p-4 border border-gray-200 {{ $color['border'] }} hover:shadow-xl {{ $color['shadow'] }} transition-all duration-300 hover:transform hover:scale-105 relative overflow-hidden">
                                <div
                                    class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b {{ $color['from'] }} {{ $color['to'] }} transform scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top">
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex-1">
                                        <h6 class="font-bold {{ $color['text'] }} mb-2 text-base md:text-lg">
                                            {{ $simbol->simbol }}</h6>
                                        <p class="mb-0 text-gray-600 text-sm md:text-base leading-relaxed">
                                            {{ Str::limit($simbol->makna, 70) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- MAKNA WARNA --}}
                <div>
                    <h3
                        class="font-bold text-center lg:text-left mb-4 text-gray-800 text-xl md:text-2xl flex items-center gap-3">
                        <span class="w-1 h-8 bg-gradient-to-b from-orange-500 to-orange-700 rounded-full"></span>
                        MAKNA WARNA
                    </h3>
                    <div class="space-y-3">
                        @php
                            $warnaColors = [
                                [
                                    'from' => 'from-blue-700',
                                    'to' => 'to-indigo-900',
                                    'border' => 'hover:border-blue-300',
                                    'shadow' => 'hover:shadow-blue-500/10',
                                    'text' => 'text-blue-700',
                                    'shadowBox' => 'shadow-blue-500/30',
                                ],
                                [
                                    'from' => 'from-orange-500',
                                    'to' => 'to-amber-600',
                                    'border' => 'hover:border-orange-300',
                                    'shadow' => 'hover:shadow-orange-500/10',
                                    'text' => 'text-orange-600',
                                    'shadowBox' => 'shadow-orange-500/30',
                                ],
                            ];
                        @endphp

                        @foreach ($maknaWarnaList as $warnaIndex => $warna)
                            @php
                                $color = $warnaColors[$warnaIndex % count($warnaColors)];
                            @endphp
                            <div
                                class="group bg-white rounded-xl p-3 md:p-4 border border-gray-200 {{ $color['border'] }} hover:shadow-xl {{ $color['shadow'] }} transition-all duration-300 hover:transform hover:scale-105 relative overflow-hidden">
                                <div
                                    class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b {{ $color['from'] }} {{ $color['to'] }} transform scale-y-0 group-hover:scale-y-100 transition-transform duration-300 origin-top">
                                </div>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="shrink-0 w-12 h-12 bg-gradient-to-br {{ $color['from'] }} {{ $color['to'] }} rounded-xl shadow-lg {{ $color['shadowBox'] }} group-hover:scale-110 transition-all duration-300">
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="font-bold {{ $color['text'] }} mb-2 text-base md:text-lg">
                                            {{ $warna->warna }}</h6>
                                        <p class="mb-0 text-gray-600 text-sm md:text-base leading-relaxed">
                                            {{ Str::limit($warna->makna, 100) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN: LOGO --}}
            <div class="flex items-center justify-center lg:justify-end">
                <div class="relative group">
                    <!-- Main Logo Container -->
                    <div
                        class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-10 md:p-14 w-full max-w-md shadow-2xl shadow-blue-500/10 border border-gray-200 transform transition-all duration-500 hover:scale-105 hover:shadow-3xl hover:shadow-blue-500/20 relative z-10">
                        <img src="{{ asset('storage/img/kabinet/' . $kabinet->logo) }}"
                            class="w-full h-auto transform transition-transform duration-500 group-hover:scale-105"
                            alt="Logo Aksa Sinergi">
                    </div>

                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-blue-600/20 rounded-full blur-2xl group-hover:blur-3xl transition-all duration-500">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-orange-400/20 to-orange-600/20 rounded-full blur-2xl group-hover:blur-3xl transition-all duration-500">
                    </div>

                    <!-- Accent Border -->
                    <div
                        class="absolute inset-0 rounded-3xl border-2 border-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-orange-500 opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-xl">
                    </div>
                </div>
            </div>

        </div>
        <div class="flex items-center justify-center mt-16 md:mt-20">
            <div class="flex-1 h-px bg-gradient-to-r from-transparent to-blue-500 max-w-xs"></div>
            <div class="w-4 h-4 mx-4 bg-blue-500 rotate-45 transform origin-center"></div>
            <div class="flex-1 h-px bg-gradient-to-l from-transparent to-blue-500 max-w-xs"></div>
        </div>
    </div>
</section>
