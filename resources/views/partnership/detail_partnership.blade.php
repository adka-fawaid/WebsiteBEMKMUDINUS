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
                            <a href="\partnership">Partnership</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="\detail">Partnership BEM KM UDINUS</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <img src="{{ asset('storage/partnership/' . $partnership->image) }}" class="image-fluid py-3" style="display:block; margin:auto;" width="500px" height="100%" alt="">
        <div class="konten-partnership">
            <p class="mb-3 text-secondary">{{ $partnership->create_at }}</p>
            <h4 class="fw-bold mb-3">{{ $partnership->judul }}</h4>
            <p class="text-secondary">{!! $partnership->desc !!}</p>

        </div>
    </div>
</section>
@endsection