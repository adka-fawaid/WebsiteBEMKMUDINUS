@extends('layouts.layouts')

@section('content')
<!-- ukm -->
<section id="ukm" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\ukm">UKM</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-ukm text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">UKM UDINUS</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

            @foreach ($ukms as $item)
            <div class="col-lg-4" >
                <div class="card border-0">
                    <img src="{{ asset('storage/ukm/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail_ukm/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</section>
<!-- ukm -->
@endsection