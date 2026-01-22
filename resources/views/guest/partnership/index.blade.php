@extends('guest.components.layout')

@section('content')
    <!-- Partnership Section Start -->
    <section class="partnership-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center mb-60">
                        <h2 class="section-title">Our Partnership Programs</h2>
                        <p class="section-subtitle">Join hands with us to create impactful collaborations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partnership-card p-4 text-center">
                        <img src="{{ asset('storage/dummy-logo.png') }}" alt="Dummy Partnership"
                            class="mb-3" style="max-width: 100px;">
                        <h5 class="mb-2">Media Partner</h5>
                        <p class="mb-3">This is a dummy description for the partnership program. It gives a brief overview of the collaboration opportunity.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
