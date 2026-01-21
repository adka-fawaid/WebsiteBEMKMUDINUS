@extends('layouts.layouts')

@section('content')
<section id="detail" style="margin-top: 100px;" class="py-5">
    <div class="container col-xxl-8">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\kabinet">kabinet</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="\detail">kabinet BEM KM UDINUS</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>


        <div class="konten-kabinet">
            <p class="mb-3 text-secondary">{{ $kabinet->create_at }}</p>
            <div class="text-center mb-4">
    <div class="d-flex justify-content-center mb-4">
    <div style="background:#0b3d62; padding:16px; border-radius:12px;">
        <img src="{{ asset('assets/images/' . $kabinet->image) }}"
             style="width:260px; height:260px; object-fit:cover; border-radius:8px;"
             alt="{{ $kabinet->judul }}">
    </div>
</div>
            <h4 class="fw-bold mb-3">{{ $kabinet->judul }}</h4>
            <p class="text-secondary">{!! $kabinet->desc !!}</p>

        </div>
    </div>
</section>
@endsection