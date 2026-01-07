@extends('layouts.layouts')

@section('content')

{{-- HERO / SECTION SELAMAT DATANG --}}
<section id="hero-home" class="hero-home d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="fw-bold display-5 mb-2">BEM KM UDINUS</h1>
                <p class="lead mb-4">Bersinergi dalam Satu Aksi</p>

                <div class="d-flex gap-2 flex-wrap">
                    <a href="/kabinet" class="btn btn-warning rounded-pill px-4 fw-semibold">Lihat Profil</a>
                    <a href="/kabinet" class="btn btn-warning rounded-pill px-4 fw-semibold">Lihat Profil</a>
                    <a href="/kabinet" class="btn btn-warning rounded-pill px-4 fw-semibold">Lihat Profil</a>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block text-end">
                {{-- kalau mau taruh foto kanan --}}
                 <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/logo.png') }}"
                     class="img-fluid"
                     alt="Hero BEM KM UDINUS">
            </div>
            </div>
        </div>
    </div>
</section>

{{-- SAMBUTAN PRESIDEN MAHASISWA --}}
<section class="section-dark py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4 section-title">Sambutan Presiden Mahasiswa</h2>

        <div class="row align-items-center g-4">
            <div class="col-lg-4 text-center">
                <img src="{{ asset('assets/images/presma.png') }}" class="img-fluid presma-img" alt="Presma">
                <div class="mt-3">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold">Aksa</span>
                    <div class="text-white-50 small mt-1">Presiden Mahasiswa</div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="text-white-50">
                    <p class="mb-3">
                        “Lorem ipsum dolor sit amet consectetur. In eget vitae metus blandit et orci. Ridiculus massa posuere
                        cursus ornare posuere phasellus. Ac quis posuere purus.
                        Lorem ipsum dolor sit amet consectetur.”
                    </p>
                    <p class="mb-0">
                        “Elementum molestie lorem dignissim vitae ridiculus lacus elit consequat.
                        Vivamus scelerisque a eu ut neque. Proin sit diam adipiscing interdum.”
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MAKNA LOGO + FILOSOFI WARNA --}}
<section class="section-dark py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <h3 class="fw-bold text-center mb-4 section-title">Makna Logo</h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Makna singkat warna merah bata untuk semangat dan keberanian.
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
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi singkat sesuai kebutuhanmu.
                            </p>
                        </div>
                    </div>
                </div>

                <h3 class="fw-bold text-center mt-5 mb-4 section-title">Filosofi warna</h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi filosofi warna.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <h6 class="fw-bold text-warning mb-1">Merah Bata</h6>
                            <p class="mb-0 text-white-50 small">
                                Isi deskripsi filosofi warna.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="logo-card h-100 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <div class="text-warning fw-semibold mb-2">Kabinet Aksa -</div>
                        <img src="{{ asset('assets/images/logo aksa sinergi.png') }}" class="img-fluid logo-big" alt="Logo Aksa Sinergi">
                    </div>
                </div>
            </div>

        </div>
    </div>
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
                        <img src="{{ asset('assets/images/news-placeholder.jpg') }}" class="w-100 news-img" alt="Berita">
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
