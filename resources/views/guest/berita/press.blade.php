@extends('layouts.layouts')

@section('content')
<section id="press" style="margin-top: 80px;" class="py-5">
    <div class="container col-xxl-8">

        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ $title }}</h2>
            <h5 class="text-secondary">{{ $subtitle }}</h5>
        </div>

        <!-- Carousel Swipe -->
        <div id="pressCarousel" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/artikel/press-1.png') }}" class="d-block w-100 img-fluid" alt="press-1" style="max-height: 600px; object-fit: contain;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/artikel/press-2.png') }}" class="d-block w-100 img-fluid" alt="press-2" style="max-height: 600px; object-fit: contain;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/artikel/press-3.png') }}" class="d-block w-100 img-fluid" alt="press-3" style="max-height: 600px; object-fit: contain;">
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#pressCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#pressCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#pressCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#pressCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#pressCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>

        <div class="press-body text-start mx-auto" style="max-width:900px;">
            <p>{!! nl2br(e($body)) !!}</p>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ url('/berita') }}" class="btn btn-outline-secondary">Kembali ke Berita</a>
        </div>

    </div>
</section>
@endsection
