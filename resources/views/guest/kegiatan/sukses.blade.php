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

                <!-- Action -->
                <div class="flex justify-center">
                    <a href="{{ route('guest.kegiatan.index') }}"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-lg shadow hover:shadow-xl transition">
                        Kembali ke Daftar Kegiatan
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
