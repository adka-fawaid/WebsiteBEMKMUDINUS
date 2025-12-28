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
                <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}" class="img-fluid " width="100%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                 <div class="text-center" style="margin-top: 70px;">
            <h2 class="fw-bold">Kabinet Aksa Sinergi</h2>
                </div>
                <br>

                <h1 class="fw-bold mb-3">Visi dan Misi</h1>
                <br>

                <h5 class="fw-bold mb-3">Visi</h5>
                <p class="mb-3">Mewujudkan Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Dian Nuswantoro yang
                    unggul dalam pengembangan Sumber Daya Mahasiswa dengan pendekatan Good Governance secara
                    berkelanjutan, dengan berlandaskan Tri Dharma Perguruan Tinggi.4</p>

                <h5 class="fw-bold mb-3">Misi</h5>
                <p class="mb-1">1. Mengembangkan pengurus Badan Eksekutif
                    Mahasiswa Keluarga Mahasiswa Universitas
                    Dian Nuswantoro melalui pelatihan,
                    workshop, dan mentoring tentang
                    manajemen organisasi, kepemimpinan, dan
                    pengembangan sumber daya manusia.</p>
                <p class="mb-1">2. Memperkuat partisipasi anggota organisasi
                    Keluarga Mahasiswa dalam pengambilan
                    keputusan dan kegiatan melalui pelatihan
                    kepemimpinan dan manajemen organisasi
                    yang efektif.</p>
                <p class="mb-1">3. Membangun jejaring dengan organisasi dan
                    instansi lain untuk meningkatkan kerjasama
                    serta memperluas peluang pengembangan
                    sumber daya mahasiswa.</p>
                <p class="mb-1">4. Menjadikan Badan Eksekutif Mahasiswa
                    Keluarga Mahasiswa Universitas Dian
                    Nuswantoro sebagai koordinator antar
                    lembaga Keluarga Mahasiswa, serta
                    meningkatkan kualitas fungsi pengayoman
                    dan penaungan.</p>
                <p class="mb-3">5. Mengoptimalkan peran mahasiswa dalam
                    pengabdian masyarakat, keterampilan
                    sosial, kewirausahaan, dan bergerak sesuai
                    arah pergerakan yang relevan.</p>
            </div>
        </div>

        <!-- =======================
             KABINET ARAH JUANG (3 CARD PERSIS)
        ======================== -->
        <div class="text-center" style="margin-top: 70px;">
            <h2 class="fw-bold">Kabinet Aksa Sinergi</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

            <!-- PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #031f29ff; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #eb8425ff; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGO -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #031f29ff; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/logo.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Logo Kabinet Arah Juang">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            LOGO KABINET ARAH JUANG
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #eb8425ff; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #031f29ff; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #eb8425ff; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

                <!-- WAKIL PRESIDEN -->
            <div class="col">
                <div class="card border-0 h-100"
                    style="border-radius: 10px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.08);">
                    <div style="background: #7b2d2d; padding: 18px;">
                        <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}" class="img-fluid"
                            style="width: 100%; border-radius: 8px;" alt="Wakil Presiden Mahasiswa">
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: .5px;">
                            WAKIL PRESIDEN MAHASISWA
                        </h6>
                        <p class="text-secondary mb-2" style="font-size: 13px;">#bemkmudinus</p>
                        <a href="#" class="text-decoration-none" style="color: #ff4d4d; font-size: 13px;">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($kabinets as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/kabinet/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail_kabinet/{{ $item->slug }}"
                            class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- kabinet -->
@endsection
