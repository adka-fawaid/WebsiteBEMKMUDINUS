@extends('guest.components.layout')

@section('content')
    <!-- SECTION SELAMAT DATANG -->
    @include('guest.beranda.section.welcome')


    <!-- SAMBUTAN PRESIDEN MAHASISWA -->
    @include('guest.beranda.section.sambutan')

    <!-- FILOSOFI LOGO DAN WARNA KABINET -->
    @include('guest.beranda.section.filosofi')


    <!-- BERITA TERBARU -->
    @include('guest.beranda.section.berita')
@endsection
