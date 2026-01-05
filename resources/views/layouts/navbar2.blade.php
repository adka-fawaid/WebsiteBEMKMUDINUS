<!-- Navbar -->
<nav
     class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 bg-white shadow color-black">

    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/Logo.png') }}" height="85" width="85" alt="">
        </a>

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo aksa sinergi.png') }}" height="75" width="75" alt="">
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav ml-auto">
                
            </ul>

            <!-- Tambahkan ml-auto di sini -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle w3-button w3-mobile" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beranda </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="nav-item"><a href="/kabinet" class="nav-link w3-button w3-mobile dropdown-item">Kabinet Aksa Sinergi</a></li>
                        <li class="nav-item"><a href="/forum" class="nav-link w3-button w3-mobile dropdown-item">Forum dan Kajian</a></li>
                        <li class="nav-item"><a href="/proker" class="nav-link w3-button w3-mobile dropdown-item">Program Kerja</a></li>
                        <li class="nav-item"><a href="/ormawa" class="nav-link w3-button w3-mobile dropdown-item">Ormawa UDINUS</a></li>
                        <li class="nav-item"><a href="/ukm" class="nav-link w3-button w3-mobile dropdown-item">UKM UDINUS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="https://docs.google.com/forms/d/e/1FAIpQLSeDNiL7fvSjR2IHC3DDOpwghKzlBshTjA0eZ9YRZGGUSWX3Bg/viewform">Partnership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="/berita">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="/foto">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="https://sites.google.com/mhs.dinus.ac.id/kalenderkm">Kalender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w3-button w3-mobile" href="https://wa.me/895710034499">Kontak</a>
                </li>
                <li>
                    <a type="button" class="w3-mobile btn btn-primary rounded-pill ms-2" href="/form">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->