@extends('guest.components.layout')

@section('content')
    <!-- kabinet -->
    <section id="kabinet" class="mt-24">
        <div class="container mx-auto px-4 py-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a
                                    href="\">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                                    <a href="\kabinet">Kabinet</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </nav>

            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <br>
                    <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}" class="img-fluid " width="70%"
                        height="200px" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="text-center mt-16">
                        <h1 class="font-bold text-4xl lg:text-5xl">KABINET AKSA SINERGI</h1>
                    </div>
                    <br>
                    <br>

                    <h2 class="font-bold text-[#f09a1c] text-2xl">Filosofi Nama & Logo Kabinet</h2>
                    <br>

                    <p class="mb-3">Nama "Aksa Sinergi" mencerminkan pandangan luas (Aksa) terhadap
                        perubahan dan tekad untuk membangun kolaborasi (Sinergi) dalam setiap
                        langkah organisasi.
                    </p>

                    <p class="mb-1">Logo Kabinet Aksa Sinergi terinspirasi dari simbol energi dan pergerakan yang
                        berpadu dalam harmoni. Setiap lengkungan menyerupai sayap
                        mempresentasikan semangat jiwa mahasiswa yang dinamis, saling terhubung, dan
                        membentuk pusaran sinergi yang kuat. Warna biru melambangkan keteguhan
                        dan intelektualitas, sedangkan warna emas menggambarkan semangat dan
                        kemuliaan dalam pengabdian.</p>

                </div>
            </div>

        </div>
    </section>
    <!-- filosofi -->
@endsection
