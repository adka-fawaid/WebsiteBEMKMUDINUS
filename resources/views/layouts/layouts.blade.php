<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Meta untuk tampil di Whatsapp --}}
    @if (Request::segment(1) == '')
    <meta property="og:title" content="Website BEM KM UDINUS" />
    <meta name="description" content="Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Dian Nuswantoro" />
    <meta property="og:url" content="http://.com" />
    <meta property="og:description" content="BEM KM UDINUS" />
    <meta property="og:image" content="{{ asset('assets/icons/Logo BEM KM UDINUS.png') }}" />
    <meta property="og:type" content="article" />
    <title>Website BEM KM UDINUS</title>
    @elseif (Request::segment(1) == 'detail')
    <meta property="og:title" content="{{ $artikel->judul }}" />
    <meta name="description" content="{{ $artikel->judul }}" />
    <meta property="og:url" content="http://.com/detail/{{ $artikel->slug }}" />
    <meta property="og:description" content="{{ $artikel->judul }}" />
    @if ($artikel->image)
    <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
    @else
    <meta property="og:image" content="{{ asset('assets/icons/Logo BEM KM UDINUS.png') }}" />
    @endif
    <meta property="og:type" content="article" />

    <title>Website BEM KM UDINUS | {{ $artikel->title }}</title>
    @endif

    {{-- Meta untuk tampil di Whatsapp --}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/icons/Logo BEM KM UDINUS.ico') }}">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- W3CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Navbar -->

    <!-- Content -->
    @yield('content')
    <!-- Content -->

    <section id="footer">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Media Partnership dan Sponsorship Hubungi:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.tiktok.com/@bemkmudinus/" class="me-4 text-reset">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.instagram.com/bemkmudinus/" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@bemkmudinusofficial8044" class="me-4 text-reset">
                        <i class="fab fa-youtube"></i>
                    </a>


                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section id="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>BEM KM UDINUS
                            </h6>
                            <p>
                                Badan Eksekutif Mahasiswa Keluarga Mahasiswa Universitas Dian Nuswantoro Semarang Tahun
                                Periode 2025/2026 Kabinet Aksa Sinergi "<i>Selaras Bermakna Nyata</i>".
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Navigasi
                            </h6>
                            <p>
                                <a href="/" class="text-reset">Beranda</a>
                            </p>
                            <p>
                                <a href="/berita" class="text-reset">Berita</a>
                            </p>
                            <p>
                                <a href="/foto" class="text-reset">Kegiatan</a>
                            </p>
                            <p>
                                <a href="/calendar" class="text-reset">Kalender</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                PAGE
                            </h6>
                            <p>
                                <a href="/kabinet" class="text-reset">Kabinet</a>
                            </p>
                            <p>
                                <a href="mailto:bemkm@orma.dinus.ac.id" class="text-reset">Kontak</a>
                            </p>
                            <p>
                                <a href="/proker" class="text-reset">Program Kerja</a>
                            </p>
                            <p>
                                <a href="/forum" class="text-reset">Forum dan Kajian</a>
                            </p>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i>Gedung F UDINUS <a
                                    href="https://maps.app.goo.gl/nd2qTKHGDPYRi7tg8">(MAP)</a></p>
                            <p>
                                <a href="mailto:bemkm@orma.dinus.ac.id"><i class="fas fa-envelope me-3"></i>bemkm@orma.dinus.ac.id</a>
                            </p>
                            <p><i class="fas fa-phone me-3"></i>0895710034499 (Nata)</p>
                            <p><i class="fas fa-print me-3"></i>Partnership <a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSeDNiL7fvSjR2IHC3DDOpwghKzlBshTjA0eZ9YRZGGUSWX3Bg/viewform">(Click
                                    Here)</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <section class="">
                <!-- Footer -->
                <footer class="text-center text-white" style="background-color: #0a4275;">
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                        <!-- Section: CTA -->
                        <section class="">
                            <p class="d-flex justify-content-center align-items-center">
                                @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <span class="me-3">Saya Bukan Admin BEM KM UDINUS</span>
                                <button data-mdb-ripple-init type="submit" class="btn btn-outline-light btn-rounded">
                                    Logout
                                </button>
                            </form>
                            @else
                            <form action="/logout" method="POST">
                                @csrf
                                <span class="me-3">Dashboard Admin BEM KM UDINUS</span>
                                <button data-mdb-ripple-init type="submit" class="btn btn-outline-light btn-rounded">
                                    Login
                                </button>
                            </form>
                            @endauth
                            </p>
                        </section>
                        <!-- Section: CTA -->
                    </div>
                    <!-- Grid container -->

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2024 Copyright:
                        <a class="text-white" href="/">Kementerian Riset dan Teknologi</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </section>

        </footer>
        <!-- Footer -->
    </section>

    <!-- Javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <!-- {{-- JQUERY --}} 
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>

    <script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#summernote').summernote({
                height: 200,
            });
        });

        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };

    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

</body>

</html>