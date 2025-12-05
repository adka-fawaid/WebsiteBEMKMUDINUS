@extends('layouts.layouts')

@section('content')
<section id="foto" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\foto">Gallery</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-berita text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Kegiatan BEM KM UDINUS</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($photos as $photo)
            <div  class="card border-0" >
                <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" class="card-img-top" alt="">
                </a>
                <p class="mt-3 text-secondary">{{ $photo->judul }}</p>
            </div>
            @endforeach

        </div>

    </div>

</section>
@endsection