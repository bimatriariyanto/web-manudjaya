@extends('tampil/layouts/master')
@section('content')
    <section class="wrapper">
        <!-- /.container -->
        <div class="container-fluid px-md-2">
            <div class="swiper-container blog grid-view mb-8 mb-md-10" data-margin="30" data-nav="true" data-dots="false"
                data-items-xxl="1" data-items-md="1" data-items-xs="1" data-effect="slide" data-autoplay="true">
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <figure class="rounded"><img src="{{ url('assets/img/banner-manud1.png') }}" alt="" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="{{ url('assets/img/banner-manud2.png') }}" alt="" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="{{ url('assets/img/banner-manud3.png') }}" alt="" />
                            </figure>
                        </div>


                        <!--/.swiper-slide -->
                        {{-- <div class="swiper-slide">
                            <figure class="rounded"><img src="{{ url('images/bg-ppid.png') }}" alt="" /></figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded"><img src="{{ url('images/bg-ppid.png') }}" alt="" /></figure>
                        </div> --}}
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="wrapper bg-soft-blue">
        <div class="container pt-6 pt-md-6">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container blog   grid-view mb-12 " data-margin="30" data-nav="true" data-dots="true"
                        data-items-xxl="4" data-items-md="3" data-items-xs="2" data-effect="slide" data-autoplay="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">

                                        <a href="https://www.wmo.int/" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/banner-wmo.jpg" alt="WMO">
                                        </a>



                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="http://epengawasan.bmkg.go.id/wbs/" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/banner-epengawasan.jpg"
                                                alt="E-Pengawasan">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="https://www.lapor.go.id/" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/Lapor-UKP4.jpg" alt="LAPOR!">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="http://bit.ly/PersepsiWebsiteBMKG">
                                            <img src="https://bmkg.go.id/asset/img/banner/Banner-Survey-BMKG.jpg"
                                                alt="Survey Layanan Website BMKG">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="https://www.bmkg.go.id/rb" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/banner-reformasi-birokrasi.jpg"
                                                alt="Reformasi Birokrasi BMKG">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="https://www.bmkg.go.id/profil/?p=stop-pungli-bmkg" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/saber-pungli.jpg"
                                                alt="Saber Pungli">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="http://dataonline.bmkg.go.id/home" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/banner_data_online.jpg"
                                                alt="Data Online">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">

                                        <a href="http://puslitbang.bmkg.go.id/jmg" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/banner-journalMG.jpg"
                                                alt="Jurnal Meteorologi dan Geofisika">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="http://inatews.bmkg.go.id/new/query_gmpqc.php" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/dataGempa.jpg"
                                                alt="Data Gempabumi">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="https://www.bmkg.go.id/geofisika-potensial/kalkulator-magnet-bumi.bmkg"
                                            target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/kalkulator-magnet.jpg"
                                                alt="Kalkulator Magnet Bumi">
                                        </a>
                                        </figu>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="#">
                                            <img src="https://bmkg.go.id/asset/img/banner/mottobmkg.jpg" alt="Motto BMKG">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="https://www.bmkg.go.id/profil/?p=maklumat-pelayanan">
                                            <img src="https://bmkg.go.id/asset/img/banner/maklumatpelayanan.jpg"
                                                alt="Maklumat Pelayanan">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="rounded bg-pale-aqua p-1">
                                        <a href="http://lpse.bmkg.go.id" target="_blank">
                                            <img src="https://bmkg.go.id/asset/img/banner/lpse.jpg" alt="LPSE">
                                        </a>
                                    </figure>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>

            </div> --}}

            <div class="row gx-lg-0 gx-xl-8  justify-content-center align-items-center">
                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <img src="./assets/img/icons/lineal/check-list.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4>Pelayanan Cepat</h4>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <img src="{{ url('assets/img/icons/lineal/browser.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4>Mengembangkan Potensi Desa</h4>

                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <img src="./assets/img/icons/lineal/analytics.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4>Informasi Transparan</h4>

                        </div>

                    </div>

                </div>


            </div>

            <div class="container-xxl bg-green text-white rounded">
                <div class="row gx-lg-8  gx-xl-12 py-8   justify-content-center align-items-center  ">
                    <div class="col-lg-3 position-relative">
                        <div class="shape bg-dot primary rellax w-17 h-18" data-rellax-speed="1"
                            style="bottom: -2rem; left: -0.7rem;"></div>
                        <figure class="d-none d-lg-block rounded mb-0 "><img src="{{ url('/assets/img/kepala-desa.png') }}"
                                alt="">
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6 mt-12 px-md-8">
                        <h3 class="display-6 mb-4 text-white">Profil Kepala Desa</h3>
                        <p class="mb-4 " style="text-align: justify;">
                            Nama : Alamsyah Putra <br>
                            Alamat : Jl. Soeta No.45, Ds. Manud Jaya <br>
                            No. HP : 085637485993 <br>
                            Pendidikan Terakhir : Magister (S2) <br><br>
                            Pengalaman Organisasi <br>
                        <ol>
                            <li>Ketua RT 03 Tahun 2015-2019</li>
                            <li>Ketua RW 01 Tahun 2019-2022</li>
                            <li>Kepala Desa Manud Jaya 2022 - Sekarang</li>
                        </ol>
                        </p>

                        {{-- <a href="#" class="btn btn-primary rounded-pill  mb-0">Lihat Profil</a> --}}
                    </div>
                    <!--/column -->
                </div>
            </div>

            <div class="container pt-12 pt-md-10 pb-8 pb-md-6">
                <div class="row mb-6">
                    <div class="col-md-8">
                        <div class="display-6 text-dark  ">Berita Desa</div>
                    </div>
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                        <a href="https://www.bmkg.go.id/tag/?tag=press-release&lang=ID"
                            class="btn btn-soft-primary rounded-pill mb-0">Selengkapnya</a>
                    </div>
                </div>

                <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="false" data-items-xl="4"
                    data-items-md="3" data-items-xs="2" data-autoplay="true" data-effect="slide">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($posts as $d)
                                @php
                                    $cp = count($posts);
                                @endphp
                                @if ($cp != 0)
                                    <div class="swiper-slide ">
                                        <figure class="rounded mb-6">
                                            <img src="{{ $d->featured_image }}" alt="" /><a
                                                class="item-link swiper-no-swiping" href="#" data-glightbox
                                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                                        </figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <h2 class="post-title h5"><a href="/berita/{{ $d->slug }}"
                                                        class="link-dark">{{ $d->name }}</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                @else
                                    <div class="swiper-slide ">

                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <h2 class="post-title h5"><a href="#" class="link-dark">Tidak ada
                                                        berita</a>
                                                </h2>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <div class="row gx-lg-0 gx-xl-8  align-items-center">
                <div class="row mb-6">
                    <div class="col-md-8">
                        <div class="display-6 text-dark  ">Diskusi dengan Kepala Desa</div>
                    </div>

                </div>
                @foreach ($janjian as $j)
                    @php
                        $cj = count($janjian);

                    @endphp


                    @if ($cj == 0)
                        <div class="col-md-6 col-xl-4 mb-6">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body p-4">
                                    <img src="./assets/img/icons/lineal/check-list.svg"
                                        class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4>Jadwal Tidak Tersedia</h4>

                                </div>

                            </div>

                        </div>
                    @else
                        <div class="col-md-6 col-xl-4 mb-6">
                            <div class="card shadow-lg card-border-bottom border-soft-primary">
                                <div class="card-body p-4">
                                    <img src="./assets/img/icons/lineal/check-list.svg"
                                        class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4>{{ $j->name }}</h4>
                                    @php
                                        echo $j->content;
                                    @endphp
                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container py-4 py-md-6">
            <div class="d-flex">
                <div class="p-2">
                    <h2 class="display-6 mb-0">Media Sosial</h2>
                </div>

            </div>
            <div class="row mt-4  ">
                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=380&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="380" height="500" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <a class="twitter-timeline" href="https://twitter.com/manudjaya22?ref_src=twsrc%5Etfw">Tweets
                                by
                                manudjaya22</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-6">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-4">
                            <iframe src="https://www.instagram.com/p/manudjaya/embed" width="400" height="480"
                                frameborder="0" scrolling="no" allowtransparency="true"></iframe>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
