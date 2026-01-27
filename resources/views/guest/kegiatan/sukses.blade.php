@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto mt-5 px-4 md:px-6 max-w-5xl">
            <div class="bg-white shadow-xl rounded-2xl p-8 md:p-12">

                <!-- Icon Success -->
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mb-6">
                        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                        Pendaftaran Berhasil!
                    </h1>

                    <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-blue-500 rounded-full mx-auto mb-6"></div>

                    <p class="text-gray-600 text-base md:text-lg">
                        Terima kasih telah mendaftar pada kegiatan
                        <span class="font-semibold text-blue-700">{{ $kegiatan->nama }}</span>
                    </p>
                </div>

                <!-- Nomor Pendaftaran -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6 mb-8">
                    <div class="text-center">
                        <p class="text-sm text-gray-600 mb-2 uppercase tracking-wide">Nomor Pendaftaran Anda</p>
                        <p id="nomorPendaftaran" class="text-3xl md:text-4xl font-bold text-blue-700 tracking-wider">
                            {{ $nomorPendaftaran }}
                        </p>
                        <p class="text-sm text-gray-500 mt-2">
                            Simpan nomor ini untuk keperluan konfirmasi
                        </p>
                    </div>
                </div>

                <!-- Warning -->
                <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-r-lg mb-8">
                    <p class="text-sm text-red-700">
                        Halaman ini bersifat <strong>sementara</strong>.
                        Silakan screenshot atau catat nomor pendaftaran Anda.
                    </p>
                </div>

                <!-- Langkah Selanjutnya: Gabung Grup WhatsApp -->
                @if (isset($kegiatan->pendaftarans) && $kegiatan->pendaftarans->count() > 0)
                    @php
                        $pendaftaranAktif = $kegiatan->pendaftarans->first();
                    @endphp
                    @if (!empty($pendaftaranAktif->link_grup))
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-6 mb-8 rounded-r-lg">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-blue-800 mb-3">Langkah Selanjutnya</h3>
                                    <p class="text-sm text-blue-700 mb-4">
                                        Silakan bergabung ke grup WhatsApp kegiatan untuk mendapatkan informasi lebih
                                        lanjut:
                                    </p>
                                    <div class="space-y-3">
                                        <a href="{{ $pendaftaranAktif->link_grup }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="flex items-center gap-3 p-3 bg-white rounded-lg hover:bg-blue-100 transition-colors duration-200 group">
                                            <!-- Icon Grup General (Users) -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="w-6 h-6 text-blue-600 group-hover:text-blue-700 lucide lucide-users-round-icon lucide-users-round">
                                                <path d="M18 21a8 8 0 0 0-16 0" />
                                                <circle cx="10" cy="8" r="5" />
                                                <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                                            </svg>
                                            <div>
                                                <p class="text-xs text-gray-500">Grup Kegiatan</p>
                                                <p class="text-sm font-semibold text-gray-800 group-hover:text-blue-700">
                                                    Gabung Grup
                                                </p>
                                            </div>
                                            <svg class="w-5 h-5 text-gray-400 ml-auto group-hover:text-blue-600"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p class="text-xs text-blue-600 mt-3">
                                        📝 Sertakan <strong>Nomor Pendaftaran</strong> Anda saat bergabung ke grup
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                <!-- Hubungi Kami -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-4">
                    <a href="{{ route('guest.kegiatan.index') }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-white border-2 border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali ke Daftar Kegiatan
                    </a>
                    <a href="{{ route('guest.kontak.index') }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Hubungi Kami
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
