@extends('layouts.layouts')

@section('content')
<!-- kabinet -->
<section id="kabinet" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\kabinet">Kabinet</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <br>
                <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}" class="img-fluid " width="70%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                 <div class="text-center" style="margin-top: 70px;">
            <h1 class="fw-bold">KABINET AKSA SINERGI</h1>
                </div>
                <br>

                <h2 class="fw-bold mb-3" style="color: #f09a1c">Filosofi Nama & Logo Kabinet</h2>
                <br>

                <p class="mb-3">Nama "Aksa Sinergi" mencerminkan pandangan luas (Aksa) terhadap
                    perubahan dan tekad untuk membangun kolaborasi (Sinergi) dalam setiap
                    langkah organisasi.
                </p>

                <p class="mb-1">Logo Kabinet Aksa Sinergi terinspirasi dari simbol energi dan pergerakan yang 
                    berpadu dalam harmoni. Setiap lengkungan menyerupai sayap
                mempresentasikan semangat jiwa mahasiswa yang dinamis, saling terhubung, dan 
                membentuk pusaran sinergi yang kuat. Warna biru melambangkan keteguhan
            dan intelektualitas, sedangkan warna emas menggambarkan semangat dan
            kemuliaan dalam pengabdian.</p>
                
            </div>
        </div>

        <!-- KABINET AKSA SINERGI -->
        <div class="text-center" style="margin-top: 70px;">
            <h2 class="fw-bold" style="color: #f09a1c;">Struktural Kabinet</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

            <!-- PRESIDEN MAHASISWA -->
<div class="col">
    <div class="card border-0 h-100"
        style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">

        <!-- FOTO -->
        <div class="d-flex align-items-center justify-content-center"
             style="background:#0b3d62; padding:18px; height:260px;">
            <img src="{{ asset('assets/images/presma2.JPG') }}"
                 class="d-block"
                 style="max-width:220px; max-height:220px; object-fit:cover; border-radius:8px;"
                 alt="Presiden Mahasiswa">
        </div>

        <!-- BODY -->
        <div class="card-body" style="padding:18px;">
            <h6 class="fw-bold text-uppercase mb-2"
                style="font-size:13px; letter-spacing:.5px;">
                PRESIDEN MAHASISWA
            </h6>
            <p class="text-secondary mb-2" style="font-size:13px;">
                #bemkmudinus
            </p>
            <a href="/kabinet/presiden-mahasiswa"
               class="text-decoration-none"
               style="color:#f09a1c; font-size:13px;">
                Selengkapnya
            </a>
        </div>
    </div>
</div>


            <!-- LOGO KABINET -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                            class="img-fluid" style="max-width: 220px; height: auto; display:block; margin: 0 auto;"alt="Logo Aksa Sinergi">

                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            LOGO KABINET AKSA SINERGI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                       
                    </div>
                </div>
            </div>

            <!-- WAKIL PRESIDEN -->
<div class="col">
    <div class="card border-0 h-100"
        style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
        
        <div class="text-center" style="background: #0b3d62; padding: 18px;">
            <img src="{{ asset('assets/images/presma2.JPG') }}"
                 class="d-block mx-auto"
                 style="max-width:220px; max-height:220px; object-fit:cover; border-radius:8px;"
                 alt="Wakil Presiden Mahasiswa">
        </div>

        <div class="card-body" style="padding: 18px;">
            <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                WAKIL PRESIDEN MAHASISWA
            </h6>
            <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
            <a href="/kabinet/wakil-presiden-mahasiswa"
               class="text-decoration-none"
               style="color:#f09a1c; font-size:13px;">
               Selengkapnya
            </a>
        </div>
    </div>
</div>

                <!-- VISI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                         <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                            class="img-fluid" style="max-width: 220px; height: auto; display:block; margin: 0 auto;"alt="Logo Aksa Sinergi">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            VISI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                       <a href="/kabinet/visi"
   class="text-decoration-none"
   style="color:#f09a1c; font-size:13px;">
   Selengkapnya
</a>

                    </div>
                </div>
            </div>

                <!-- SEKRETARIS JENDERAL -->
<div class="col">
    <div class="card border-0 h-100"
        style="border-radius:10px; overflow:hidden; box-shadow:0 8px 20px rgba(0,0,0,.08);">

        <!-- FOTO -->
        <div class="d-flex align-items-center justify-content-center"
             style="background:#0b3d62; padding:18px; height:260px;">
            <img src="{{ asset('assets/images/presma2.JPG') }}"
                 class="d-block"
                 style="max-width:220px; max-height:220px; object-fit:cover; border-radius:8px;"
                 alt="Sekretaris Jenderal">
        </div>

        <!-- BODY -->
        <div class="card-body" style="padding:18px;">
            <h6 class="fw-bold text-uppercase mb-2"
                style="font-size:13px; letter-spacing:.5px;">
                SEKRETARIS JENDERAL
            </h6>
            <p class="text-secondary mb-2" style="font-size:13px;">
                #bemkmudinus
            </p>
            <a href="/kabinet/sekretaris-jenderal"
               class="text-decoration-none"
               style="color:#f09a1c; font-size:13px;">
                Selengkapnya
            </a>
        </div>
    </div>
</div>

                <!-- MISI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                         <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                            class="img-fluid" style="max-width: 220px; height: auto; display:block; margin: 0 auto;"alt="Logo Aksa Sinergi">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            MISI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/misi"
   class="text-decoration-none"
   style="color:#f09a1c; font-size:13px;">
   Selengkapnya
</a>

                    </div>
                </div>
            </div>

                <!-- BIRO ADMINISTRASI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Biro Administrasi">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            BIRO ADMINISTRASI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/biro-administrasi" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- MASKOT -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/maskot.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Maskot Kabinet Aksa Sinergi">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            MASKOT
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/maskot" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- BIRO KEUANGAN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/biro_keuangan.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Biro Keuangan">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            BIRO KEUANGAN
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/biro-keuangan" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            </div> {{-- ✅ tutup row 3 kolom sebelum BIRO PSDM --}}


{{-- GRID KHUSUS BIRO (2 kolom, imbang) --}}
<div class="row row-cols-1 row-cols-md-2 g-4 py-4">

                <!-- BIRO PSDM -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/biro_psdm.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Biro PSDM">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            BIRO PSDM
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/biro-psdm" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- BIRO MEDKOMINFO -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/biro_medkominfo.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Biro Medkominfo">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            BIRO MEDKOMINFO
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/biro-medkominfo" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

</div> {{-- tutup row 2 kolom --}}

<div class="row g-4 py-4">
    <div class="col-12">
        <!-- KEMENKOAN PERGERAKAN card -->
        <div class="card border-0 h-100"
            style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
            <div style="background: #0b3d62; padding: 18px;">
                <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                    style="width: 100%; border-radius: 8px;" alt="Kemenkoan Pergerakan">
            </div>
            <div class="card-body" style="padding: 18px;">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                    KEMENKOAN PERGERAKAN
                </h6>
                <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                <a href="/kabinet/kemenkoan-pergerakan" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<!-- lanjutkan row 3 kolom seperti biasa -->
<div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN SOSIAL POLITIK -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Sosial Politik">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN SOSIAL POLITIK
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-sosial-politik" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- KEMENTERIA PP&I -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian PP&I">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN PP&I
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-ppi" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- KEMENTERIAN SOSIAL MASYARAKAT -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Sosial Masyarakat">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN SOSIAL MASYARAKAT
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-sosial-masyarakat" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
</div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}

<div class="row g-4 py-4">
    <div class="col-12">
        <!-- KEMENKOAN PENAUNGAN & KESEJAHTERAAN-->
        <div class="card border-0 h-100"
            style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
            <div style="background: #0b3d62; padding: 18px;">
                <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                    style="width: 100%; border-radius: 8px;" alt="Kemenkoan Penaungan & Kesejahteraan">
            </div>
            <div class="card-body" style="padding: 18px;">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                    KEMENKOAN PENAUNGAN & KESEJAHTERAAN
                </h6>
                <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                <a href="/kabinet/kemenkoan-penaungan-kesejahteraan" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<!-- lanjutkan row 3 kolom seperti biasa -->
<div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN DALAM NEGERI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Dalam Negeri">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN DALAM NEGERI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                       <a href="/kabinet/kementerian-dalam-negeri" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- KEMENTERIA KESPORA -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Kespora">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN Kespora
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-kespora" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- KEMENTERIAN ADVOKESMA -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Advokesma">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN ADVOKESMA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-advokesma" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
</div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}

<div class="row g-4 py-4">
    <div class="col-12">
        <!-- KEMENKOAN RELASI & INOVASI -->
        <div class="card border-0 h-100"
            style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
            <div style="background: #0b3d62; padding: 18px;">
                <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                    style="width: 100%; border-radius: 8px;" alt="Kemenkoan Relasi & Inovasi">
            </div>
            <div class="card-body" style="padding: 18px;">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                    KEMENKOAN RELASI & INOVASI
                </h6>
                <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                <a href="/kabinet/kemenkoan-relasi-inovasi" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<!-- lanjutkan row 3 kolom seperti biasa -->
<div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN LUAR NEGERI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Luar Negeri">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN LUAR NEGERI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-luar-negeri" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>

                    </div>
                </div>
            </div>

                <!-- KEMENTERIAN KREASI -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Kreasi">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN KREASI
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                       <a href="/kabinet/kementerian-kreasi" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>

                <!-- KEMENTERIAN BUMKM -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #0b3d62; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Kementerian Bumkm">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            KEMENTERIAN BUMKM
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="/kabinet/kementerian-bumkm" class="text-decoration-none" style="color:#f09a1c; font-size:13px;">Selengkapnya</a>
                    </div>
                </div>
            </div>
</div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}


    </div>
</section>
<!-- kabinet -->
@endsection
