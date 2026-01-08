@extends('layouts.layouts')

@section('content')
<section id="detail-kegiatan" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/kegiatan">Kegiatan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $kegiatan->judul }}
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <img src="{{ asset('storage/artikel/' . $kegiatan->foto) }}" onerror="this.src='{{ asset('assets/images/logo.png') }}'" class="image-fluid py-3" style="display:block; margin:auto;" width="500px" height="100%" alt="{{ $kegiatan->judul }}">
        <div class="konten-kegiatan">
            <p class="mb-3 text-secondary">{{ $kegiatan->created_at->format('d M Y') }}</p>
            <h4 class="fw-bold mb-3">{{ $kegiatan->judul }}</h4>
            <p class="text-secondary">{!! $kegiatan->ringkasan !!}</p>

            <!-- Dokumentasi Kegiatan Section -->
            @if($kegiatan->dokumentasiKegiatan->count() > 0)
            <hr class="my-4">
            <h5 class="fw-bold mb-3">Dokumentasi Kegiatan</h5>
            <div class="row g-3">
                @foreach($kegiatan->dokumentasiKegiatan as $doc)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        @if(filter_var($doc->dokumentasi, FILTER_VALIDATE_URL))
                            @if(strpos($doc->dokumentasi, 'youtube') !== false || strpos($doc->dokumentasi, 'youtu.be') !== false)
                                <iframe class="card-img-top" style="height: 200px;" src="{{ str_replace('youtu.be/', 'youtube.com/embed/', str_replace('watch?v=', 'embed/', $doc->dokumentasi)) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @else
                                <img src="{{ $doc->dokumentasi }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Dokumentasi">
                            @endif
                        @else
                            <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                                <span class="text-muted">File/Link Dokumentasi</span>
                            </div>
                        @endif
                        <div class="card-body">
                            @if($doc->keterangan)
                                <p class="card-text text-secondary">{{ $doc->keterangan }}</p>
                            @endif
                            @if(filter_var($doc->dokumentasi, FILTER_VALIDATE_URL))
                                <a href="{{ $doc->dokumentasi }}" target="_blank" class="btn btn-sm btn-primary">Lihat Dokumentasi</a>
                            @else
                                <p class="text-muted small">{{ $doc->dokumentasi }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
