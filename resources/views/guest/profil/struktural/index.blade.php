@extends('guest.components.layout')

@section('content')
    <!-- struktural -->
    <section id="struktural" class="mt-24">
        <div class="container mx-auto px-4 py-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="/struktural">Struktural</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </nav>

            <!-- KABINET AKSA SINERGI -->
            <div class="text-center mt-16">
                <h2 class="font-bold text-3xl text-[#f09a1c]">Struktural Kabinet</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

                <!-- PRESIDEN MAHASISWA -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">

                        <!-- FOTO -->
                        <div class="flex items-center justify-center bg-[#0b3d62] p-4 h-64">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="block max-w-[220px] max-h-[220px] object-cover rounded-lg" alt="Presiden Mahasiswa">
                        </div>

                        <!-- BODY -->
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                PRESIDEN MAHASISWA
                            </h6>
                            <p class="text-secondary mb-2 text-xs">
                                #bemkmudinus
                            </p>
                            <a href="/kabinet/presiden-mahasiswa"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>


                <!-- LOGO KABINET -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="img-fluid max-w-[220px] h-auto block mx-auto" alt="Logo Aksa Sinergi">

                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                LOGO KABINET AKSA SINERGI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>

                        </div>
                    </div>
                </div>

                <!-- WAKIL PRESIDEN -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">

                        <div class="text-center bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="block mx-auto max-w-[220px] max-h-[220px] object-cover rounded-lg"
                                alt="Wakil Presiden Mahasiswa">
                        </div>

                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                WAKIL PRESIDEN MAHASISWA
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/wakil-presiden-mahasiswa"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- VISI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="img-fluid max-w-[220px] h-auto block mx-auto" alt="Logo Aksa Sinergi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                VISI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/visi" class="text-decoration-none text-[#f09a1c] text-xs hover:underline">
                                Selengkapnya
                            </a>

                        </div>
                    </div>
                </div>

                <!-- SEKRETARIS JENDERAL -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">

                        <!-- FOTO -->
                        <div class="flex items-center justify-center bg-[#0b3d62] p-4 h-64">
                            <img src="{{ asset('assets/images/presma2.JPG') }}"
                                class="block max-w-[220px] max-h-[220px] object-cover rounded-lg" alt="Sekretaris Jenderal">
                        </div>

                        <!-- BODY -->
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                SEKRETARIS JENDERAL
                            </h6>
                            <p class="text-secondary mb-2 text-xs">
                                #bemkmudinus
                            </p>
                            <a href="/kabinet/sekretaris-jenderal"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- MISI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/icons/Logo Aksa Sinergi.png') }}"
                                class="img-fluid max-w-[220px] h-auto block mx-auto" alt="Logo Aksa Sinergi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                MISI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/misi" class="text-decoration-none text-[#f09a1c] text-xs hover:underline">
                                Selengkapnya
                            </a>

                        </div>
                    </div>
                </div>

                <!-- BIRO ADMINISTRASI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Biro Administrasi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                BIRO ADMINISTRASI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/biro-administrasi"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- MASKOT -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/img/kabinet/maskot.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Maskot Kabinet Aksa Sinergi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                MASKOT
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/maskot"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- BIRO KEUANGAN -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Biro Keuangan">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                BIRO KEUANGAN
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/biro-keuangan"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div> {{-- ✅ tutup row 3 kolom sebelum BIRO PSDM --}}


            {{-- GRID KHUSUS BIRO (2 kolom, imbang) --}}
            <div class="row row-cols-1 row-cols-md-2 g-4 py-4">

                <!-- BIRO PSDM -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/psdm.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Biro PSDM">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                BIRO PSDM
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/biro-psdm"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- BIRO MEDKOMINFO -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/medkom.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Biro Medkominfo">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                BIRO MEDKOMINFO
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/biro-medkominfo"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div> {{-- tutup row 2 kolom --}}

            <div class="row g-4 py-4">
                <div class="col-12">
                    <!-- KEMENKOAN PERGERAKAN -->
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg bg-white">

                        <!-- Banner Image -->
                        <div class="w-full h-44 bg-[#0b3d62] overflow-hidden">
                            <img src="{{ asset('assets/images/kemenkoan_pergerakan.png') }}"
                                class="w-full h-full object-cover block" alt="Kemenkoan Pergerakan">
                        </div>

                        <!-- Content -->
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENKOAN PERGERAKAN
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kemenkoan-pergerakan"
                                class="text-[#f09a1c] text-xs no-underline hover:underline">
                                Selengkapnya
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <!-- lanjutkan row 3 kolom seperti biasa -->
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN SOSIAL POLITIK -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Sosial Politik">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN SOSIAL POLITIK
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-sosial-politik"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- KEMENTERIA PP&I -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian PP&I">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN PP&I
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-ppi"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- KEMENTERIAN SOSIAL MASYARAKAT -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Sosial Masyarakat">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN SOSIAL MASYARAKAT
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-sosial-masyarakat"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}

            <div class="row g-4 py-4">
                <div class="col-12">
                    <!-- KEMENKOAN PENAUNGAN & KESEJAHTERAAN-->
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}"
                                class="img-fluid w-full rounded-lg" alt="Kemenkoan Penaungan & Kesejahteraan">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENKOAN PENAUNGAN & KESEJAHTERAAN
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kemenkoan-penaungan-kesejahteraan"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- lanjutkan row 3 kolom seperti biasa -->
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN DALAM NEGERI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Dalam Negeri">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN DALAM NEGERI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-dalam-negeri"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- KEMENTERIA KESPORA -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Kespora">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN Kespora
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-kespora"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- KEMENTERIAN ADVOKESMA -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Advokesma">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN ADVOKESMA
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-advokesma"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}

            <div class="row g-4 py-4">
                <div class="col-12">
                    <!-- KEMENKOAN RELASI & INOVASI -->
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/img/kabinet/wakil_presiden.png') }}"
                                class="img-fluid w-full rounded-lg" alt="Kemenkoan Relasi & Inovasi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENKOAN RELASI & INOVASI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kemenkoan-relasi-inovasi"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- lanjutkan row 3 kolom seperti biasa -->
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">


                <!-- KEMENTERIAN LUAR NEGERI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Luar Negeri">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN LUAR NEGERI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-luar-negeri"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>

                        </div>
                    </div>
                </div>

                <!-- KEMENTERIAN KREASI -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Kreasi">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN KREASI
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-kreasi"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- KEMENTERIAN BUMKM -->
                <div class="col">
                    <div class="card border-0 h-100 rounded-xl overflow-hidden shadow-lg">
                        <div class="bg-[#0b3d62] p-4">
                            <img src="{{ asset('assets/images/foto_grup.png') }}" class="img-fluid w-full rounded-lg"
                                alt="Kementerian Bumkm">
                        </div>
                        <div class="card-body p-4">
                            <h6 class="font-bold text-uppercase mb-2 text-xs tracking-wider">
                                KEMENTERIAN BUMKM
                            </h6>
                            <p class="text-secondary mb-2 text-xs">#bemkmudinus</p>
                            <a href="/kabinet/kementerian-bumkm"
                                class="text-decoration-none text-[#f09a1c] text-xs hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> {{-- ✅ tutup row 3 kolom setelah KEMENTERIAN SOSIAL MASYARAKAT --}}


        </div>
    </section>
    <!-- struktural -->
@endsection
