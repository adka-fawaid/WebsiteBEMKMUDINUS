@extends('layouts.layouts')

@section('content')
<section id="calendar" style="margin-top: 100px;">
    <div class="container py-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="\calendar">Kalender</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>
        <div class="header-berita text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Kalender BEM KM UDINUS</h2>
        </div>
        <iframe src="https://calendar.google.com/calendar/embed?src=bemkm%40orma.dinus.ac.id&ctz=Asia%2FJakarta"
            style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

    </div>

</section>
@endsection