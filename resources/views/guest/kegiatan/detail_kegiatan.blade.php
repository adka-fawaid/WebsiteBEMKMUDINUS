@extends('layouts.layouts')

@section('content')
<section id="detail-kegiatan" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\kegiatan">Kegiatan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="\detail_kegiatan">Detail Kegiatan</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <img src="{{ asset('storage/artikel/' . $kegiatan->image) }}" onerror="this.src='{{ asset('assets/images/logo.png') }}'" class="image-fluid py-3" style="display:block; margin:auto;" width="500px" height="100%" alt="">
        <div class="konten-kegiatan">
            <p class="mb-3 text-secondary">{{ $kegiatan->created_at->format('d M Y') }}</p>
            <h4 class="fw-bold mb-3">{{ $kegiatan->judul }}</h4>
            <p class="text-secondary">{!! $kegiatan->desc !!}</p>

        </div>
    </div>
</section>
@endsection
