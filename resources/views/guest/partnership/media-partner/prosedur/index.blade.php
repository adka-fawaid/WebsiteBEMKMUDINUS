@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 via-white to-orange-50/50 py-20 min-h-screen relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <!-- Hero Section -->
            <div class="text-center mb-16 mt-12">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-orange-500 bg-clip-text text-transparent">
                        Prosedur Media Partner {{ ucfirst($kategori) }}
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-orange-500 rounded-full mx-auto mb-4"></div>

                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed inline">
                    Berikut adalah prosedur pengajuan media partner {{ $kategori }} bersama BEM KM UDINUS.
                </p>
            </div>

            <!-- Prosedur Content -->
            <div class="max-w-5xl mx-auto">
                @if ($prosedurs && $prosedurs->count() > 0)
                    <!-- Step by Step -->
                    <div class="space-y-5 mb-16">
                        @php
                            $colors = [
                                'blue' => ['from' => 'from-blue-600', 'to' => 'to-blue-700'],
                                'orange' => ['from' => 'from-orange-600', 'to' => 'to-orange-700'],
                                'purple' => ['from' => 'from-purple-600', 'to' => 'to-purple-700'],
                                'indigo' => ['from' => 'from-indigo-600', 'to' => 'to-indigo-700'],
                                'rose' => ['from' => 'from-rose-600', 'to' => 'to-pink-600'],
                                'green' => ['from' => 'from-green-600', 'to' => 'to-green-700'],
                                'cyan' => ['from' => 'from-cyan-600', 'to' => 'to-blue-600'],
                                'pink' => ['from' => 'from-pink-600', 'to' => 'to-rose-600'],
                            ];
                            $colorKeys = array_keys($colors);
                        @endphp

                        @foreach ($prosedurs as $index => $prosedur)
                            @php
                                $colorIndex = $index % count($colorKeys);
                                $currentColor = $colors[$colorKeys[$colorIndex]];
                            @endphp

                            <div
                                class="group bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                                <div class="flex gap-5 md:gap-6">
                                    <div class="shrink-0">
                                        <div
                                            class="w-14 h-14 bg-gradient-to-br {{ $currentColor['from'] }} {{ $currentColor['to'] }} rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">
                                            {{ $index + 1 }}
                                        </div>
                                    </div>
                                    <div class="flex-1 flex items-center">
                                        <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed">
                                            {{ $prosedur->prosedur }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-16 mb-16">
                        <div class="max-w-md mx-auto">
                            <div class="mb-6">
                                <div
                                    class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 shadow-lg">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-2xl md:text-3xl text-gray-900 mb-3">
                                Belum Ada Prosedur
                            </h3>
                            <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4">
                            </div>
                            <p class="text-gray-600 text-sm md:text-base mb-8">
                                Saat ini belum ada prosedur untuk kategori {{ $kategoriDb }}. Silakan hubungi kami untuk
                                informasi lebih lanjut.
                            </p>
                        </div>
                    </div>
                @endif

                <!-- CTA Section -->
                <div
                    class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-600 rounded-3xl p-7 md:p-10 text-center shadow-2xl relative overflow-hidden mt-15">
                    <!-- Decorative elements -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-2xl -mr-20 -mt-20"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full blur-2xl -ml-20 -mb-20"></div>

                    <div class="relative z-10">
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-3">
                            Siap Menjadi Media Partner {{ ucfirst($kategori) }}?
                        </h3>
                        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                            Ikuti prosedur di atas dan hubungi kami untuk memulai kemitraan media partner
                            {{ $kategori }} bersama BEM KM UDINUS.
                        </p>

                        <div class="flex flex-wrap gap-4 justify-center">
                            <a href="{{ route('guest.kontak.index') }}"
                                class="inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-blue-600 font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Hubungi Kami
                            </a>
                            <a href="{{ route('guest.partnership.media-partner.index') }}"
                                class="inline-flex items-center gap-2 bg-white/20 border-2 border-white hover:bg-white/30 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
