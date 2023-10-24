<header class="wrapper bg-light">
    <div class="bg-primary text-white fw-bold fs-15 mb-2">
        <div class="container py-2 d-md-flex flex-md-row">
            <div class="d-flex flex-row align-items-center">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                <address class="mb-0">Jl.Soekarno Hatta</address>
            </div>
            <div class="d-flex flex-row align-items-center me-6 ms-auto">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                <p class="mb-0">(021) 456 78 90</p>
            </div>
            <div class="d-flex flex-row align-items-center">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-white hover">manudjaya@manud.go.id</a>
                </p>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="./index.html">
                    <img src="{{ url('assets/img/logo-manud.png') }}" srcset="{{ url('assets/img/logo-manud.png') }} 2x"
                        alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                            <ul class="dropdown-menu">

                                <li class="nav-item"><a class="dropdown-item" href="/profil">Profil Desa</a>
                                </li>
                                {{-- <li class="nav-item"><a class="dropdown-item" href="#">Visi
                                        & Misi</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Tugas
                                        & Fungsi</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Struktur Organisasi
                                    </a></li> --}}


                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kabar
                                Desa</a>
                            <ul class="dropdown-menu">
                                {{-- <li class="nav-item"><a class="dropdown-item"
                                        href="{{ route('list_articles') }}">Semua</a>
                                </li> --}}
                                <li class="nav-item"><a class="dropdown-item" href="#">Kegiatan Umum</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Himbauan</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Layanan
                                        Masyarakat</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Laporan Penggunaan
                                        Dana Desa</a>
                                </li>
                                {{-- <li class="nav-item"><a class="dropdown-item" href="#">Visi
                                        & Misi</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Tugas
                                        & Fungsi</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Struktur Organisasi
                                    </a></li> --}}
                            </ul>
                        </li>
                        {{--                                <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Formulir</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" target="_blank"
                                        href="https://docs.google.com/forms/d/e/1FAIpQLSfyhf6gtHstfGs9M8dGkM7GFGXTyrt2YAtDdWNHVDZTAWYDkQ/viewform?usp=pp_url">Formulir
                                        Permohonan KTP</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
