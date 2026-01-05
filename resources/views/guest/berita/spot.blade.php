@extends('layouts.layouts')

@section('content')
<section id="spot" style="margin-top: 80px;" class="py-5">
    <div class="container col-xxl-8">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Tempat Cozy di Udinus</h2>
            <p class="text-secondary">Masih suka bingung mau nugas, meeting organisasi, atau sekedar rehat dimana?</p>
        </div>

        <div class="lead mb-4">
            <p>{!! nl2br(e($lead)) !!}</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/kreasi.jpeg') }}" class="img-fluid rounded" alt="spot-1">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/Logo Aksa Sinergi.png') }}" class="img-fluid rounded" alt="spot-2">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded" alt="spot-3">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/LOGOKREASI.png') }}" class="img-fluid rounded" alt="spot-4">
            </div>
        </div>

        <div class="mt-4 text-center">
            <h5>Credit</h5>
            <p>Designer : {{ $credit_designer }}<br>Copywriter : {{ $credit_copy }}</p>
            <p class="text-muted">{{ $organization }}</p>
        </div>

        <div class="mt-3 text-center">
            <a href="{{ url('/berita') }}" class="btn btn-outline-secondary">Kembali ke Berita</a>
        </div>

    </div>
</section>
@endsection
