@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-16 min-h-screen">
        <div class="container mx-auto px-4 md:px-8">
            <!-- Header with Icon -->
            <div class="text-center mt-6 mb-6 pt-8">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Kabinet <span class="text-blue-600">{{ $kabinet->nama }}</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    BEM KM UDINUS Periode {{ $kabinet->periode }}
                </p>
            </div>

            <!-- Logo dan Filosofi Nama Section -->
            <div class="max-w-6xl mx-auto mb-12" x-data="{ show: false }" x-intersect="show = true">
                <div x-show="show" x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-8"
                    class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-blue-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <!-- Logo -->
                        <div class="flex justify-center">
                            <div class="relative group">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-3xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                                </div>
                                <img src="{{ asset('storage/img/kabinet/' . $kabinet->logo) }}"
                                    class="relative w-full max-w-md drop-shadow-2xl group-hover:scale-105 transition-transform duration-300"
                                    alt="Logo Kabinet">
                            </div>
                        </div>

                        <!-- Filosofi Nama -->
                        <div>
                            <div class="mb-6">
                                <h2 class="text-3xl font-bold text-gray-900 mb-4">Filosofi Nama & Logo</h2>
                                <div class="h-1 w-20 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full"></div>
                            </div>

                            <p class="text-gray-700 mb-4 leading-relaxed">
                                {{ $kabinet->deskripsi }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arti Simbol Logo Section -->
            <div class="max-w-6xl mx-auto mb-12" x-data="{ show: false }" x-intersect="show = true">
                <div class="text-center mb-5" x-show="show" x-transition:enter="transition ease-out duration-600"
                    x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-6">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Arti Simbol Logo</h2>
                    <p class="text-gray-600">Setiap simbol logo memiliki makna mendalam yang mencerminkan nilai-nilai
                        organisasi</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @php
                        $simbolColors = ['amber', 'blue', 'purple', 'green', 'indigo', 'pink', 'cyan', 'rose'];
                    @endphp

                    @foreach ($maknaSimbolList as $index => $maknaSimbol)
                        @php
                            $animDelay = 200 + $index * 150;
                            $color = $simbolColors[$index % count($simbolColors)];
                            $styles = [
                                'amber' => [
                                    'border' => 'border-amber-500',
                                    'text' => 'text-amber-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-amber-50 hover:to-orange-50',
                                    'shadow' => 'hover:shadow-amber-200/50',
                                ],
                                'blue' => [
                                    'border' => 'border-blue-500',
                                    'text' => 'text-blue-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50',
                                    'shadow' => 'hover:shadow-blue-200/50',
                                ],
                                'purple' => [
                                    'border' => 'border-purple-500',
                                    'text' => 'text-purple-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50',
                                    'shadow' => 'hover:shadow-purple-200/50',
                                ],
                                'green' => [
                                    'border' => 'border-green-500',
                                    'text' => 'text-green-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-green-50 hover:to-emerald-50',
                                    'shadow' => 'hover:shadow-green-200/50',
                                ],
                                'indigo' => [
                                    'border' => 'border-indigo-500',
                                    'text' => 'text-indigo-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-indigo-50 hover:to-blue-50',
                                    'shadow' => 'hover:shadow-indigo-200/50',
                                ],
                                'pink' => [
                                    'border' => 'border-pink-500',
                                    'text' => 'text-pink-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-pink-50 hover:to-rose-50',
                                    'shadow' => 'hover:shadow-pink-200/50',
                                ],
                                'cyan' => [
                                    'border' => 'border-cyan-500',
                                    'text' => 'text-cyan-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-cyan-50 hover:to-teal-50',
                                    'shadow' => 'hover:shadow-cyan-200/50',
                                ],
                                'rose' => [
                                    'border' => 'border-rose-500',
                                    'text' => 'text-rose-600',
                                    'hoverBg' => 'hover:bg-gradient-to-r hover:from-rose-50 hover:to-pink-50',
                                    'shadow' => 'hover:shadow-rose-200/50',
                                ],
                            ];
                            $style = $styles[$color];
                        @endphp

                        <div x-show="show" x-transition:enter="transition ease-out duration-700"
                            x-transition:enter-start="opacity-0 translate-x-12 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 scale-95" style="transition-delay: {{ $animDelay }}ms;"
                            class="bg-white rounded-2xl p-6 shadow-lg border-l-4 {{ $style['border'] }} {{ $style['hoverBg'] }} hover:shadow-2xl {{ $style['shadow'] }} hover:-translate-y-2 hover:scale-[1.02] hover:border-l-[6px] transition-all duration-300 group">
                            <h3
                                class="text-xl font-bold {{ $style['text'] }} mb-3 group-hover:scale-105 transition-transform duration-300">
                                {{ $maknaSimbol->simbol }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $maknaSimbol->makna }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Arti Warna Logo Section -->
            <div class="max-w-6xl mx-auto mb-12" x-data="{ show: false }" x-intersect="show = true">
                <div class="text-center mb-5" x-show="show" x-transition:enter="transition ease-out duration-600"
                    x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-6">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Arti Warna Logo</h2>
                    <p class="text-gray-600">Pemilihan warna yang penuh makna dan filosofi</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @php
                        $warnaStyles = [
                            'Biru Tua' => [
                                'bg' => 'from-blue-50 to-indigo-50',
                                'border' => 'border-blue-200',
                                'boxGradient' => 'from-blue-700 to-indigo-900',
                                'textColor' => 'text-blue-600',
                                'hexCode' => '#1e3a8a',
                            ],
                            'Orange' => [
                                'bg' => 'from-orange-50 to-amber-50',
                                'border' => 'border-orange-200',
                                'boxGradient' => 'from-orange-500 to-amber-600',
                                'textColor' => 'text-orange-600',
                                'hexCode' => '#f97316',
                            ],
                        ];
                    @endphp

                    @foreach ($maknaWarnaList as $warnaIndex => $maknaWarna)
                        @php
                            $warnaAnimDelay = 300 + $warnaIndex * 200;
                            $style = $warnaStyles[$maknaWarna->warna] ?? [
                                'bg' => 'from-gray-50 to-gray-50',
                                'border' => 'border-gray-200',
                                'boxGradient' => 'from-gray-500 to-gray-600',
                                'textColor' => 'text-gray-600',
                                'hexCode' => '#6b7280',
                            ];
                        @endphp

                        <div x-show="show" x-transition:enter="transition ease-out duration-700"
                            x-transition:enter-start="opacity-0 scale-90 translate-y-8"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 scale-90" style="transition-delay: {{ $warnaAnimDelay }}ms;"
                            class="bg-gradient-to-br {{ $style['bg'] }} rounded-2xl p-8 shadow-lg border-2 {{ $style['border'] }} hover:shadow-xl hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 group">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="shrink-0 w-16 h-16 bg-gradient-to-br {{ $style['boxGradient'] }} rounded-2xl shadow-lg group-hover:scale-110 transition-all duration-300">
                                </div>
                                <div>
                                    <h3
                                        class="text-2xl font-bold text-gray-900 mb-1 group-hover:scale-105 transition-transform duration-300">
                                        {{ $maknaWarna->warna }}</h3>
                                    <p class="text-sm {{ $style['textColor'] }} font-semibold">{{ $style['hexCode'] }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $maknaWarna->makna }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Visi Section -->
            <div class="max-w-6xl mx-auto mb-6" x-data="{ show: false }" x-intersect="show = true">
                <div x-show="show" x-transition:enter="transition ease-out duration-800"
                    x-transition:enter-start="opacity-0 translate-y-10 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-2xl p-8 md:p-12 text-white relative overflow-hidden hover:shadow-3xl hover:-translate-y-1 transition-all duration-300 group">
                    <!-- Decorative Elements -->
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full -ml-24 -mb-24 group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold group-hover:scale-105 transition-transform duration-300">Visi
                            </h2>
                        </div>
                        @foreach ($visiList as $visi)
                            <p class="text-lg text-white leading-relaxed">
                                {{ $visi->visi }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="max-w-6xl mx-auto mb-10" x-data="{ show: false }" x-intersect="show = true">
                <div x-show="show" x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-blue-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                <path d="M2 17l10 5 10-5"></path>
                                <path d="M2 12l10 5 10-5"></path>
                            </svg>
                        </div>
                        <h2
                            class="text-3xl font-bold text-gray-900 group-hover:scale-105 transition-transform duration-300">
                            Misi</h2>
                    </div>

                    <div class="space-y-4">
                        @foreach ($misiList as $index => $item)
                            @php
                                $misiAnimDelay = 400 + $index * 150;
                            @endphp
                            <div x-show="show" x-transition:enter="transition ease-out duration-700"
                                x-transition:enter-start="opacity-0 translate-x-12"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-x-12"
                                style="transition-delay: {{ $misiAnimDelay }}ms;"
                                class="flex gap-4 p-5 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 hover:shadow-md hover:-translate-x-2 hover:bg-gradient-to-r hover:from-blue-100 hover:to-indigo-100 transition-all duration-300 group/item">
                                <div class="shrink-0">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center text-white font-bold shadow-md group-hover/item:scale-110 transition-all duration-300">
                                        {{ $index + 1 }}
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed flex-1">{{ $item->misi }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
