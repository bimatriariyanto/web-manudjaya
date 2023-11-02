<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desa Manud Jaya">
    <meta name="keywords" content="manud jaya, desa, pelayanan">
    <meta name="author" content="Manud Jaya">
    <title>Manud Jaya</title>
    <link rel="shortcut icon" href="{{ url('/images/logo-bmkg.png') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    {{-- <link rel="preload" href="./assets/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'"> --}}
    <link rel="preload" href="{{ url('assets/css/fonts/thicccboi.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0"
        nonce="85H7Dt1Z"></script>

</head>

<body>

    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <div class="d-none d-lg-block bg-navy text-white fw-bold fs-15 mb-2">
                <div class="container py-2 d-md-flex flex-md-row">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                        <address class="mb-0 text-white">Jl. Soekarno Hatta No.45,
                            Ds. Manud jaya, Kec. Rancak, Kab. Bana</address>
                    </div>
                    <div class="d-flex flex-row align-items-center me-6 ms-auto">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                        <p class="mb-0 text-white">Call Center (021) 443345</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                        <p class="mb-0"><a href="mailto:manudjaya@gmail.com"
                                class="link-white hover">manudjaya@gmail.com</a>
                        </p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100 ">
                        <a class="d-flex flex-row align-items-center" href="/">
                            <img class="d-none d-md-block img-brand" src="{{ url('/assets/img/logo-desa1.png') }}"
                                alt="" />
                            <img class="d-md-none img-brand" src="{{ url('/assets/img/logo-desa2.png') }}"
                                alt="" />
                            {{-- <h3 class="ms-4">E-PPID BMKG</h3> --}}

                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">PPID BMKG</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link " href="/">Beranda</a>

                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link " href="/tentang-desa">Profil Desa</a>

                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Pembuatan Surat</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-kependudukan">
                                                <span class="fas fa-file-alt mr-1"></span> Formulir Kependudukan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-berkelakuanbaik">
                                                <span class="fas fa-file-alt mr-1"></span> Surat Keterangan Berkelakuan
                                                Baik
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-domisili">
                                                <span class="fas fa-file-alt mr-1"></span> Surat Keterangan Domisili
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-kematian">
                                                <span class="fas fa-file-alt mr-1"></span> Surat Keterangan Kematian
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-pindah">
                                                <span class="fas fa-file-alt mr-1"></span> Surat Keterangan Pindah
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="/form-wargatidakmampu">
                                                <span class="fas fa-file-alt mr-1"></span> Surat Keterangan Warga Tidak
                                                Mampu
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item"><a class="dropdown-item" href="#">Informasi Publik
                                                Secara Berkala</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Informasi Publik
                                                Setiap Saat</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Informasi Publik
                                                Serta Merta</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="https://bmkg.go.id/profil/?p=informasi-yang-dikecualikan">Informasi
                                                yang Dikecualikan</a></li> --}}
                                    </ul>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('laporan')}}">Laporan</a>

                                </li> --}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Berita</a>

                                    {{-- </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Penghargaan</a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">FAQ</a>

                                </li> --}}

                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@bmkg.go.id</a>
                                    <br /> Call Center (021) 196 <br />
                                    {{-- <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav> --}}
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto d-lg-none">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            {{-- <li class="nav-item d-none d-md-block">
                                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                            </li> --}}
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
        <!-- /header -->
        @yield('content')
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-navy text-white">
        <div class="container py-5 py-md-7">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <img class="w-19 h-12 mb-4" src="{{ url('assets/img/logo-desa2.png') }}" alt="logo-BMKG"
                            style="filter:drop-shadow(2px 2px 2px #ffff)" />

                        <p class="fw-bold mb-0">Kantor Pusat</p>
                        <p>Jl. Soekarno Hatta No.45,
                            Ds. Manud jaya, Kec. Rancak, Kab. Bana</p>
                        <p class="fw-bold mb-0">Telp & Fax</p>
                        <p>Call Center (021) 443345
                            Fax (021) 49498</p>
                        <p class="fw-bold mb-0">Email</p>
                        <p>manudjaya@gmail.com</p>

                        {{-- <p class="mb-4">© 2022 BMKG <br class="d-none d-lg-block" />All rights reserved.
                        </p> --}}
                        {{-- <nav class="nav social ">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav> --}}
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->

                <div class="col-md-8 col-lg-4 mt-8">
                    <div class="widget">
                        <h4 class="widget-title text-white">Maps Desa Manud Jaya</h4>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=230&amp;hl=en&amp;q=manud jaya&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://connectionsgame.org/">Connections Unlimited</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 600px;
                                    height: 230px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 600px;
                                    height: 230px;
                                }

                                .gmap_iframe {
                                    width: 600px !important;
                                    height: 230px !important;
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="bg-dark text-white py-4">
            <div class="container">
                <p>© 2023 Manud Jaya All rights reserved.
                </p>
            </div>

        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/theme.js') }}"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: 'your-app-id',
                xfbml: true,
                version: 'v18.0'
            });
        };
    </script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>

</html>
