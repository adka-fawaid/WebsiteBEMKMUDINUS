@extends('guest.components.layout')

@section('content')
    <section id="detail-kegiatan"
        class="min-h-screen bg-gradient-to-br from-blue-50/30 via-white to-orange-50/30 py-16 md:py-20 lg:py-24 relative overflow-hidden">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-2 sm:px-3 lg:px-4 max-w-7xl relative z-10">
            <div class="space-y-4 md:space-y-5 lg:space-y-6">
                <!-- Title & Category -->
                <div class="text-center">
                    <h1
                        class="font-bold bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent text-2xl md:text-3xl lg:text-4xl mt-4 mb-4">
                        {{ $kegiatan->nama }}
                    </h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                    <div
                        class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold px-5 py-2.5 rounded-xl leading-tight text-sm shadow-xl shadow-orange-500/50 mb-2">
                        {{ $kegiatan->kategori }}
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="max-w-4xl mx-auto">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl bg-gray-50">
                        <img src="{{ $kegiatan->foto ? asset('storage/img/program-kerja/' . $kegiatan->foto) : asset('img/logo/logo-bemkm-transparan.png') }}"
                            class="w-full h-auto max-h-[600px] object-contain mx-auto" alt="{{ $kegiatan->nama }}">
                    </div>
                </div>

                <!-- Meta Information -->
                <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6">
                    <!-- Tanggal -->
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-medium">
                            @php
                                $tanggalMulai = \Carbon\Carbon::parse($kegiatan->tanggal_mulai);
                                $tanggalSelesai = $kegiatan->tanggal_selesai
                                    ? \Carbon\Carbon::parse($kegiatan->tanggal_selesai)
                                    : null;
                            @endphp
                            {{ $tanggalMulai->locale('id')->translatedFormat('d M Y') }}
                            @if ($tanggalSelesai && !$tanggalMulai->isSameDay($tanggalSelesai))
                                -
                                {{ $tanggalSelesai->locale('id')->translatedFormat('d M Y') }}
                            @endif
                        </span>
                    </div>
                    <!-- Tanggal Pendaftaran (jika ada) -->
                    @if (isset($pendaftaran) && $pendaftaran)
                        <div class="flex items-center gap-2 text-green-600">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-medium">
                                Pendaftaran:
                                @php
                                    $tanggalBuka = $pendaftaran->tanggal_buka
                                        ? \Carbon\Carbon::parse($pendaftaran->tanggal_buka)
                                        : null;
                                    $tanggalTutup = $pendaftaran->tanggal_tutup
                                        ? \Carbon\Carbon::parse($pendaftaran->tanggal_tutup)
                                        : null;
                                @endphp
                                @if ($tanggalBuka)
                                    {{ $tanggalBuka->locale('id')->translatedFormat('d M Y') }}
                                @endif
                                @if ($tanggalTutup && (!$tanggalBuka || !$tanggalBuka->isSameDay($tanggalTutup)))
                                    - {{ $tanggalTutup->locale('id')->translatedFormat('d M Y') }}
                                @endif
                            </span>
                        </div>
                    @endif
                    <!-- Updated Date -->
                    @if ($kegiatan->created_at != $kegiatan->updated_at)
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            <span class="text-sm font-medium">Diperbarui:
                                {{ $kegiatan->updated_at->locale('id')->translatedFormat('d M Y') }}</span>
                        </div>
                    @endif
                </div>

                <!-- Description Content -->
                <div class="mx-auto px-2 mb-8">
                    <div class="text-gray-700 text-base md:text-lg leading-relaxed whitespace-pre-line">
                        {!! $kegiatan->deskripsi !!}
                    </div>
                    @if (($pendaftaran ?? true) && $kegiatan->pendaftaran)
                        <div class="flex justify-center mt-8">
                            <a href="{{ route('guest.kegiatan.daftar', $kegiatan->id) }}"
                                class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Daftar</span>
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Dokumentasi Kegiatan Section -->
                @if ($kegiatan->dokumentasiKegiatan && $kegiatan->dokumentasiKegiatan->count() > 0)
                    <div class="max-w-7xl mx-auto">
                        <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                </path>
                            </svg>
                            <span>Dokumentasi Kegiatan</span>
                        </h3>
                        <div class="max-w-3xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach ($kegiatan->dokumentasiKegiatan as $doc)
                                    <div class="bg-white rounded-xl shadow border p-4 flex flex-col h-full">
                                        @if (filter_var($doc->dokumentasi, FILTER_VALIDATE_URL))
                                            @if (strpos($doc->dokumentasi, 'youtube') !== false || strpos($doc->dokumentasi, 'youtu.be') !== false)
                                                <div class="aspect-video rounded-lg overflow-hidden mb-3">
                                                    <iframe class="w-full h-full"
                                                        src="{{ str_replace('youtu.be/', 'youtube.com/embed/', str_replace('watch?v=', 'embed/', $doc->dokumentasi)) }}"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                            @else
                                                <img src="{{ $doc->dokumentasi }}"
                                                    class="rounded-lg mb-3 w-full h-48 object-cover" alt="Dokumentasi">
                                            @endif
                                        @else
                                            <div
                                                class="flex items-center justify-center bg-gray-100 rounded-lg mb-3 w-full h-48">
                                                <span class="text-gray-400">File/Link Dokumentasi</span>
                                            </div>
                                        @endif
                                        <div class="flex-1">
                                            @if ($doc->keterangan)
                                                <p class="text-gray-600 text-sm mb-2">{{ $doc->keterangan }}</p>
                                            @endif
                                        </div>
                                        @if (filter_var($doc->dokumentasi, FILTER_VALIDATE_URL))
                                            <a href="{{ $doc->dokumentasi }}" target="_blank"
                                                class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold text-xs rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow hover:shadow-lg mt-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                </svg>
                                                <span>Lihat Dokumentasi</span>
                                            </a>
                                        @else
                                            <p class="text-gray-400 text-xs mt-2">{{ $doc->dokumentasi }}</p>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Decorative Divider -->
                <div class="flex items-center justify-center mt-12 md:mt-16">
                    <div class="flex-1 h-px bg-gradient-to-r from-transparent to-blue-500 max-w-xs"></div>
                    <div class="w-4 h-4 mx-4 bg-blue-500 rotate-45 transform origin-center"></div>
                    <div class="flex-1 h-px bg-gradient-to-l from-transparent to-blue-500 max-w-xs"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
