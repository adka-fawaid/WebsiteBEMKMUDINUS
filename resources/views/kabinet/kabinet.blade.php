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
                <img src="{{ asset('assets/icons/Logo BEM Arus Sinergitas.png') }}" class="img-fluid " width="100%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h3><b>Kabinet Arus Sinergitas</b></h3>
                </div>

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
        

        <div class="header-kabinet text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Kabinet BEM KM UDINUS</h2>
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