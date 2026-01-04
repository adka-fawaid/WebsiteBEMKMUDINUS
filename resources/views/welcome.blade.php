@extends('layouts.layouts')

@section('content')

{{-- HERO / SECTION SELAMAT DATANG --}}
<section id="hero-home" class="hero-home">
    <div class="hero-overlay"></div>

    <div class="container hero-content">
        <br> <br> <br> <br>
        <h1 class="hero-title">BEM KM UDINUS</h1>
        <p class="hero-subtitle">" Bersinergi dalam Satu Aksi "</p>

        <br> <br> <br> <br>
        <div class="hero-buttons">
            <a href="/kabinet" class="btn btn-warning hero-btn">Lihat Profil</a>
        </div>
    </div>
</section>


{{-- SAMBUTAN PRESIDEN MAHASISWA --}}
<section class="section-presma py-5">
    <div class="container">
        <div class="row align-items-center presma-wrapper">

            {{-- FOTO PRESMA --}}
            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <br>
                <div class="presma-photo-box">
                    <img src="{{ asset('assets/images/presma2.JPG') }}"
                        class="img-fluid presma-img"
                        alt="Presiden Mahasiswa">
                </div>

                <div class="presma-name mt-3">
                    <span class="badge-presma">Lu'luun Aula</span>
                    <div class="presma-title">Presiden Mahasiswa Periode 2025/2026</div>
                </div>
            </div>

            {{-- TEKS SAMBUTAN --}}
            <div class="col-lg-7">
                <h2 class=" text-center presma-heading mb-4">
                    Sambutan Presiden Mahasiswa
                </h2> <br>

                <p class="presma-text">
                    “Dengan penuh semangat, kami dari Badan Eksekutif Mahasiswa
                    Keluarga Mahasiswa Universitas Dian Nuswantoro mengajak seluruh
                    mahasiswa untuk terus berperan aktif dalam menciptakan lingkungan
                    kampus yang kolaboratif, inklusif, dan berorientasi pada perubahan positif.”
                </p>

                <p class="presma-text">
                    “Kami percaya bahwa setiap mahasiswa memiliki potensi luar biasa
                    untuk menjadi agen perubahan — bukan hanya di lingkungan akademik,
                    tetapi juga dalam masyarakat luas.”
                </p>

                <p class="presma-text">
                    “Mari bersama-sama bersinergi dan beraksi, menyalakan semangat
                    perjuangan mahasiswa yang berpikir kritis, bertindak solutif,
                    dan bergerak dengan hati.”
                </p>
            </div>

        </div>

        {{-- GARIS PEMBATAS --}}
        <div class="section-divider mt-5"></div>
    </div>
</section>

{{-- MAKNA LOGO + FILOSOFI WARNA --}}
<section class="section-dark py-5 makna-section">
    <div class="container">

        {{-- JUDUL TENGAH SECTION --}}
        <div class="text-center mb-4">
            <h2 class="fw-bold section-title">KABINET AKSA SINERGI</h2>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">

                <h3 class="fw-bold text-center mb-4 section-title">MAKNA LOGO</h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Melambangkan semangat juang mahasiswa UDINUS dalam membawa perubahan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Biru Tua</h6>
                            <p class="mb-0 text-white-50 small">
                                Melambangkan keteguhan, intelektualitas, dan kebijaksanaan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi singkat sesuai kebutuhanmu.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi singkat sesuai kebutuhanmu.
                            </p>
                        </div>
                    </div>
                </div>

                <h3 class="fw-bold text-center mt-5 mb-4 section-title">FILOSOFI WARNA</h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Biru Tua</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi filosofi warna.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Orange</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi filosofi warna.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- LOGO --}}
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="logo-card text-center">
                    <img src="{{ asset('assets/images/logo aksa sinergi.png') }}"
                         class="logo-big"
                         alt="Logo Aksa Sinergi">
                </div>
            </div>

        </div>
    </div>

    {{-- GARIS PEMBATAS --}}
    <div class="section-divider mt-4"></div>
</section>


{{-- BERITA TERBARU --}}
<section class="section-dark py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-1 section-title">Berita Terbaru BEM KM UDINUS</h2>
        <p class="text-center text-white-50 mb-4 small">Update kegiatan, acara, dan informasi terbaru seputar BEM KM UDINUS</p>

        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            {{-- contoh 3 card statis, nanti bisa kamu ganti dinamis --}}
            @for ($i = 1; $i <= 3; $i++)
                <div class="col">
                    <div class="news-card">
                        <img src="{{ asset('assets/images/foto_bersama.jpeg') }}" class="w-100 news-img" alt="Berita">
                        <div class="news-badge">Webinar<br>International</div>
                        <div class="p-3">
                            <div class="fw-semibold text-white">Webinar International</div>
                            <div class="text-white-50 small">BEM KM UDINUS</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection
