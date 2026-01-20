@extends('layouts.layouts')

@section('content')
    {{-- HERO / SECTION SELAMAT DATANG --}}
    <section id="hero-home"
        class="relative min-h-screen flex items-center justify-center text-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/images/foto_bersama.jpeg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/35 z-[1]"></div>

        <!-- Content -->
        <div class="container relative z-[2] px-4">
            <h1
                class="font-extrabold tracking-[2px] uppercase text-[#f6b43b] mb-2.5 text-5xl sm:text-6xl md:text-7xl lg:text-8xl leading-tight">
                BEM KM UDINUS</h1>
            <p class="text-white mb-6 text-xl sm:text-2xl md:text-3xl">" Bersinergi dalam Satu Aksi "</p>

            <div class="flex justify-center gap-4 flex-wrap mt-12">
                <a href="/kabinet"
                    class="inline-block font-bold border-0 rounded-full px-11 py-3.5 text-lg sm:text-xl md:text-2xl bg-warning text-dark hover:bg-warning/90 transition-colors">Lihat
                    Profil</a>
            </div>
        </div>
    </section>


    {{-- SAMBUTAN PRESIDEN MAHASISWA --}}
    <section class="bg-[#0b3a5c] text-white py-12">
        <div class="container">
            <div class="row align-items-center presma-wrapper">

                {{-- FOTO PRESMA --}}
                <div class="col-lg-5 text-center mb-4 mb-lg-0">
                    <div class="inline-block bg-[#eaf2f8] rounded-[18px] p-5">
                        <img src="{{ asset('assets/images/presma2.JPG') }}"
                            class="img-fluid rounded-xl max-h-[360px] object-cover max-w-[220px]" alt="Presiden Mahasiswa">
                    </div>

                    <div class="text-center mt-3">
                        <span
                            class="inline-block bg-[#f5b335] text-[#1a1a1a] px-5 py-2 rounded-[25px] font-semibold">Lu'luun
                            Aula</span>
                        <div class="text-sm text-[#d0dce6] mt-1.5">Presiden Mahasiswa Periode 2025/2026</div>
                    </div>
                </div>

                {{-- TEKS SAMBUTAN --}}
                <div class="col-lg-7">
                    <h2 class="text-center font-bold text-[#f5b335] mb-4 text-2xl md:text-3xl">
                        Sambutan Presiden Mahasiswa
                    </h2>

                    <p class="text-[#dce6ef] leading-relaxed mb-4">
                        "Dengan penuh semangat, kami dari Badan Eksekutif Mahasiswa
                        Keluarga Mahasiswa Universitas Dian Nuswantoro mengajak seluruh
                        mahasiswa untuk terus berperan aktif dalam menciptakan lingkungan
                        kampus yang kolaboratif, inklusif, dan berorientasi pada perubahan positif."
                    </p>

                    <p class="text-[#dce6ef] leading-relaxed mb-4">
                        “Kami percaya bahwa setiap mahasiswa memiliki potensi luar biasa
                        untuk menjadi agen perubahan — bukan hanya di lingkungan akademik,
                        tetapi juga dalam masyarakat luas.”
                    </p>

                    <p class="text-[#dce6ef] leading-relaxed mb-4">
                        "Mari bersama-sama bersinergi dan beraksi, menyalakan semangat
                        perjuangan mahasiswa yang berpikir kritis, bertindak solutif,
                        dan bergerak dengan hati."
                    </p>
                </div>

            </div>

            {{-- GARIS PEMBATAS --}}
            <div class="w-full h-px mt-12 opacity-60"
                style="background: linear-gradient(to right, transparent, #f5b335, transparent);"></div>
        </div>
    </section>

    {{-- MAKNA LOGO + FILOSOFI WARNA --}}
    <section class="bg-[#0c3a59] py-12">
        <div class="container">

            {{-- JUDUL TENGAH SECTION --}}
            <div class="text-center mb-4">
                <h2 class="font-bold text-[#f6b43b] text-2xl md:text-3xl">KABINET AKSA SINERGI</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">

                    <h3 class="font-bold text-center mb-4 text-[#f6b43b] text-xl md:text-2xl">MAKNA LOGO</h3>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Merah Bata</h6>
                                <p class="mb-0 text-white/50 small">
                                    Melambangkan semangat juang mahasiswa UDINUS dalam membawa perubahan.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Biru Tua</h6>
                                <p class="mb-0 text-white/50 small">
                                    Melambangkan keteguhan, intelektualitas, dan kebijaksanaan.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Merah Bata</h6>
                                <p class="mb-0 text-white/50 small">
                                    Isi deskripsi singkat sesuai kebutuhanmu.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Merah Bata</h6>
                                <p class="mb-0 text-white/50 small">
                                    Isi deskripsi singkat sesuai kebutuhanmu.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h3 class="font-bold text-center mt-12 mb-4 text-[#f6b43b] text-xl md:text-2xl">FILOSOFI WARNA</h3>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Biru Tua</h6>
                                <p class="mb-0 text-white/50 small">
                                    Isi deskripsi filosofi warna.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-black/20 rounded-[14px] p-3.5 border border-white/[0.08]">
                                <h6 class="font-bold text-warning mb-1">Orange</h6>
                                <p class="mb-0 text-white/50 small">
                                    Isi deskripsi filosofi warna.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- LOGO --}}
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="bg-white rounded-3xl p-10 max-w-[420px] mx-auto text-center">
                        <img src="{{ asset('assets/images/logo aksa sinergi.png') }}" class="max-w-[320px] w-full h-auto"
                            alt="Logo Aksa Sinergi">
                    </div>
                </div>

            </div>
        </div>

        {{-- GARIS PEMBATAS --}}
        <div class="w-full h-px mt-8 opacity-60"
            style="background: linear-gradient(to right, transparent, #f5b335, transparent);"></div>
    </section>


    {{-- BERITA TERBARU --}}
    <section class="bg-[#0c3a59] py-12">
        <div class="container">
            <h2 class="text-center font-bold mb-1 text-[#f6b43b] text-2xl md:text-3xl">Berita Terbaru BEM KM UDINUS</h2>
            <p class="text-center text-white/50 mb-4 small">Update kegiatan, acara, dan informasi terbaru seputar BEM KM
                UDINUS</p>

            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                {{-- contoh 3 card statis, nanti bisa kamu ganti dinamis --}}
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col">
                        <div class="bg-black/[0.18] rounded-2xl overflow-hidden border border-white/[0.08] relative">
                            <img src="{{ asset('assets/images/foto_bersama.jpeg') }}" class="w-100 h-[220px] object-cover"
                                alt="Berita">
                            <div
                                class="absolute left-3 top-3 bg-[#f6b43b] text-[#111] font-bold px-3 py-2.5 rounded-xl leading-tight text-xs">
                                Webinar<br>International</div>
                            <div class="p-3">
                                <div class="font-semibold text-white">Webinar International</div>
                                <div class="text-white/50 small">BEM KM UDINUS</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
