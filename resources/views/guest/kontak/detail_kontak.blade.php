@extends('layouts.layouts')

@section('content')
<section id="detail-kontak" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\kontak">Kontak</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="\detail_kontak">Detail Kontak</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <img src="{{ asset('storage/artikel/' . $kontak->image) }}" onerror="this.src='{{ asset('assets/images/logo.png') }}'" class="image-fluid py-3" style="display:block; margin:auto;" width="500px" height="100%" alt="">
        <div class="konten-kontak">
            <p class="mb-3 text-secondary">{{ $kontak->created_at->format('d M Y') }}</p>
            <h4 class="fw-bold mb-3">{{ $kontak->judul }}</h4>
            <p class="text-secondary">{!! $kontak->desc !!}</p>

        </div>
    </div>
</section>
@endsection
