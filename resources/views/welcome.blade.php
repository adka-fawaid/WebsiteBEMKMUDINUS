@extends('layouts.layouts')

@section('content')
<section id="hero" class="px-0 d-flex align-items-center justify-content-center">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text">Selamat Datang <br> Di Website Resmi</div>
            <h3>Badan Eksekutif Mahasiswa Keluarga Mahasiswa <br>
                Universitas Dian Nuswantoro</h4>
        </div>
    </div>
</section>


<!-- Partnership -->
<section id="partnership" class="py-5">
    <div class="container py-5">
        <div class="header-partnership text-center">
            <h2 class="fw-bold">Berita BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($partnerships as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/partnership/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail_partnership/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-partnership text-center">
            <a href="/partnership" class="btn btn-outline-danger">Lainnya</a>
        </div>
    </div>
</section>
<!-- Partnership -->

<!-- berita -->
<section id="berita">
    <div class="container">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Content BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($artikels as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- berita -->

<div class="container py-5">
    <img src="{{ asset('assets/images/berita.png') }}" class="card border-0 img-fluid" style="display:block; margin:auto;" alt="">
</div>


<!-- Forum -->
<section id="forum py-5">
    <div class="container py-5">
        <div class="header-forum text-center">
            <h2 class="fw-bold">Forum Kementerian BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($forums as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/forum/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail_forum/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-forum text-center">
            <a href="/forum" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- Forum -->

<!-- Join -->
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h5>Info BEM KM UDINUS</h5>
                </div>
                <h1 class="fw-bold mb-3">BEM KM UDINUS 2025 / 2026
                    Kabinet Aksa Sinergi
                    Selaras Bermakna Nyata</h1>
                <p class="mb-3">BEM KM UDINUS Merupakan
                    Badan Eksekutif Mahasiswa Keluarga Mahasiswa
                    Universitas Dian Nuswantoro Semarang
                    Dan Kabinet Aksa Sinergi Adalah Nama Kabinet
                    Untuk Anggota BEM KM UDINUS Tahun Periode
                    2025 - 2026</p>
                <a class="btn btn-outline-danger" href="https://chat.whatsapp.com/GqKNSDSh2zJ7TT7dnnThiU">Info BEM
                    KM</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/Group 1.png') }}" class="img-fluid py-4" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Join -->

<!-- Video -->
<section id="video" class="py-5">
    <div class="container py-5">
        <div class="text-center">
            <iframe width="100%" height="515" src="https://www.youtube.com/embed/b0HWmh_GHh4?si=nz-IY0RQ2GmkiVn4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- Video -->

<section id="video_youtube" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">After Movie Kegiatan BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            <div class="col">
                <iframe width="100%" height="215" src="https://youtube.com/embed/d-JtqYxYbhQ?si=OpsZz1r23Z5IT5Ve"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/jCGNuieB3Qo?si=dFNC5sLiUR0rOppv"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/cytyVQlfkkI?si=evsZocZouniEnQ9p"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="text-center">
            <a href="https://www.youtube.com/@bemkmudinusofficial8044" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
</section>

<section id="foto" class="section-foto parallax">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="strip-putih me-2"></div>
                <h3 class="fw-bold text-white">Kegiatan BEM KM UDINUS</h3>
            </div>
            <div class="text-center">
                <a href="/foto" class="btn btn-outline-danger btn-outline-white">View More</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($photos as $photo)
            <div class="col">
                <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" class="image-fluid" alt="">
                </a>
                <p class="mt-3">{{ $photo->judul }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Kementerian -->
<section id="kementerian">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}" class="img-fluid " width="100%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h3><b>Kabinet Aksa Sinergi</b></h3>
                </div>

                <h1 class="fw-bold mb-3">Filosofi Warna</h1>
                <h5 class="fw-bold mb-3">Biru</h5>
                <p class="mb-3">Biru Seringkala diasosiasikan dengan suasana yang tenang dan damai. Warna ini dapat
                    menggambarkan kestabilan dan keteduhan, yang merupakan karakteristik yang diinginkan dalam
                    kepengurusan BEM KM Universitas Dian Nuswantoro Kabinet Arus SInergitas Periode 2023 / 2024</p>

                <h5 class="fw-bold mb-3">Emas</h5>
                <p class="mb-3">Emas dapat menggambarkan kombinasi antara prestise, tindakan nyata, keberanian, dan
                    dampak positif. Ini bisa menjadi pesan kuat yang menggambarkan semangat dan komitmen kabinet Arus
                    Sinergitas BEM KM Universitas Dian Nuswantoro untuk membuat perbedaan yang positif dalam lingkup
                    Keluarga Mahasiswa Universitas Dian Nuswantoro</p>

                <h1 class="fw-bold mb-3">Makna Logo</h1>
                <h5 class="fw-bold mb-3">Trisula</h5>
                <p class="mb-3">Menggambarkan visi BEM KM UDINUS untuk menjadi agen perubahan yang aktif dalam
                    menerapkan prinsip - prinsip tridharma perguruan tinggi dengan kekuatan, komitmen, dan semangat yang
                    kuat untuk meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat di
                    lingkungan kampus</p>

                <h5 class="fw-bold mb-3">Ombak</h5>
                <p class="mb-3">Menggambarkan bahwa perubahan positif menuju sinergitas membutuhkan kesadaran terhadap
                    perubahan, kemauan untuk berkembang, serta juga kemampuan untuk berkolaborasi dengan orang lain.
                    Suatu pesan positif yang memotivasi individu dan organisasi untuk merangkul perubahan, menuju
                    sinergi, dan mencapai tujuan yang lebih besar bersama- sama</p>
            </div>
        </div>

        <h2 class="text-center fw-bold py-5">Kementerian Kabinet <br> BEM KM UDINUS</h2>

        <img src="{{ asset('assets/logo/Group 2 (1).png') }}" class="img-fluid" width="100%" height="500px" alt="">
        <div class="footer-forum text-center py-5">
            <a href="/kabinet" class="btn btn-outline-danger">Struktur Organisasi</a>
        </div>
    </div>

</section>
@endsection