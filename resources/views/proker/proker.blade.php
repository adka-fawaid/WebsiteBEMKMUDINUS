@extends('layouts.layouts')

@section('content')
<!-- proker -->
<section id="proker" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\proker">Proker</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-berita text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Program Kerja BEM KM UDINUS</h2>
        </div>

        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/icons/Logo BEM Arus Sinergitas.png') }}" class="img-fluid " width="100%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h3><b>Kabinet Arus Sinergitas</b></h3>
                </div>

                <h1 class="fw-bold mb-3">Program Kerja</h1>
                <br>
                <br>
                <h4 class="fw-bold mb-1">Goes To Campus</h4>
                <h5 class="fw-bold mb-3"><i>Teknologi dan Technopreneurship</i></h5>
                <p class="mb-3">Goes To Campus merupakan sebuah rangkaian dari Dinus Fest
                    dengan program seminar yang mengundang SMA dan SMK
                    sederajat se-Jawa Tengah dengan bertemakan Teknologi dan
                    Technopreneurship yang mempunyai tujuan untuk mengenalkan
                    teknologi di zaman sekarang yang bisa berkembang kedepannya
                    serta mampu menjadikan bekal seorang pemimpin untuk
                    menghadapi teknologi dan mampu meningkatkan awereness
                    terhadap teknologi. Sedangkan Technopreneurship sangat perlu
                    untuk dipelajari karena menjadi awalan untuk meningkatkan
                    ekonomi dengan berbasis teknologi.</p>

                <h4 class="fw-bold mb-3">KKN Aktivis</h4>
                <p class="mb-3">KKN Aktivis merupakan program pengabdian masyarakat yang menggabungkan unsur
                    pembelajaran dan pengabdian sosial selama . KKN Aktivis merupakan salah satu kegiatan yang
                    diharapkan mampu memberi andil dalam pembangunan bangsa dan negara.</p>
                <p class="mb-3">
                    Kegiatan pengabdian masyarakat ini adalah suatu bentuk pendidikan dengan cara memberikan pengalaman
                    empiris (nyata) kepada mahasiswa untuk hidup di tengah-tengah masyarakat di luar kampus dan secara
                    langsung mengajarkan kepada mahasiswa cara mengidentifikasi masalah isu-isu sosial.
                </p>

                <h4 class="fw-bold mb-3">WEBINAR INTERNASIONAL</h4>
                <p class="mb-3">Merupakan program kerja yang diadakan oleh Bem KM Udinus yang berkolaborasi dengan
                    Universitas Luar Negeri guna menjalin kerjasama international yang menghasilkan sebuah program kerja
                    dalam bentuk webinar.</p>
                <p class="mb-3">
                    Melalui kegiatan ini diharapkan mahasiswa dapat menggunakan media online untuk berdiskusi dan
                    menambah ilmu pengetahuan yang diberikan oleh pembicara nasional dan internasional yang telah
                    dihadirkan.
                </p>

                <h4 class="fw-bold mb-3">LKMM-TM 2023/2024</h4>
                <p class="mb-3">Latihan Keterampilan Manajemen Mahasiswa Tingkat Menengah, salah satu langkah lanjut
                    untuk meningkatkan kemampuan mahasiswa dalam manajemen sebuah lembaga dalam menyongsong dan
                    mempersiapkan masa depan yang lebih baik. Untuk diperlukan suatu kegiatan yang dapat melatih dan
                    membimbing mahasiswa menjadi pemimpin-pemimpin yang hebat. Salah satunya melalui Latihan
                    Keterampilan Manajemen Mahasiswa Tingkat Menengah (LKMM-TM) oleh Badan Eksekutif Mahasiswa Keluarga
                    Mahasiswa (BEM-KM) Universitas Dian Nuswantoro. Dengan diadakannya acara ini, diharapka dapat
                    merubah paradigma mahasiswa mengenai kuliah di perguruan tinggi serta menambah wawasan mahasiswa
                    mengenai kepemimpinan organisasi atau soft skill.
                    .</p>

            </div>
        </div>

        <div class="header-proker text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Proker Kementerian BEM KM UDINUS</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

            @foreach ($prokers as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/proker/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail_proker/{{ $item->slug }}"
                            class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</section>
<!-- proker -->
@endsection