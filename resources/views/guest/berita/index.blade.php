@extends('guest.components.layout')

@section('content')
    <section id="berita" style="margin-top: 100px;">
        <div class="container py-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="/berita">Berita</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </nav>

            <div class="header-berita text-center" style="margin-top: 50px;">
                <h2 class="fw-bold">Berita BEM KM UDINUS</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

                @php
                    $dummyArtikels = [
                        [
                            'image' => 'logo.png',
                            'judul' => 'Pelantikan BEM KM UDINUS Periode 2025-2026',
                            'created_at' => '15 Jan 2026',
                            'slug' => 'pelantikan-bem-km-udinus-2025-2026',
                        ],
                    ];
                @endphp

                @foreach ($dummyArtikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/' . $item['image']) }}" class="card-img-top"
                                alt="{{ $item['judul'] }}">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">{{ $item['created_at'] }}</p>
                                <h4 class="fw-bold mb-3">{{ $item['judul'] }}</h4>
                                <p class="text-secondary">#bemkmudinus</p>
                                <a href="/detail/{{ $item['slug'] }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
@endsection
