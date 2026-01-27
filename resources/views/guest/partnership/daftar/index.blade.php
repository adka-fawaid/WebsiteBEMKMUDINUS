@extends('guest.components.layout')

@section('content')
    <div class="bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50/50 py-20 min-h-screen">
        <div class="container mx-auto px-4 md:px-6 max-w-[1600px]">
            <!-- Header -->
            <div class="text-center mt-5 mb-4 md:mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-4">
                    <span
                        class="bg-gradient-to-r from-blue-700 via-blue-800 to-orange-500 bg-clip-text text-transparent box-decoration-clone inline">
                        Pendaftaran Partnership {{ ucwords(str_replace('-', ' ', $kategori)) }}
                    </span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm md:text-base max-w-2xl mx-auto">
                    Silakan isi formulir di bawah ini untuk mendaftar sebagai mitra
                    {{ ucwords(str_replace('-', ' ', $kategori)) }} bersama kami.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-6 max-w-5xl">
            <div class="bg-white shadow-md rounded-lg p-6 md:p-8">
                <form action="{{ route('guest.partnership.daftar.store', $kategori) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @if ($kategori === 'media-partner')
                        @include('guest.partnership.daftar.kategori.media-partner')
                    @elseif($kategori === 'sponsorship')
                        @include('guest.partnership.daftar.kategori.sponsorship')
                    @elseif($kategori === 'kolaborasi')
                        @include('guest.partnership.daftar.kategori.kolaborasi')
                    @elseif($kategori === 'kampus-visit')
                        @include('guest.partnership.daftar.kategori.kampus-visit')
                    @elseif($kategori === 'delegasi')
                        @include('guest.partnership.daftar.kategori.delegasi')
                    @endif

                    <div class="mt-6 text-center">
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                            Kirim Pendaftaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
