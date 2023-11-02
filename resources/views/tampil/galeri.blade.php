@extends('tampil/layouts/master')
@section('content')
    <section class="wrapper bg-soft-blue">
        <div class="container pt-6 pt-md-10 pb-4">
            <div class="row">
                <div class="col-lg-12">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Galeri</a></li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">Kegiatan Desa Manud Jaya
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="grid grid-view projects-masonry">
                                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                                    <div class="project item col-md-6 col-xl-4 product">
                                        <figure class="lift rounded mb-6"><a href="./single-project.html"> <img
                                                    src="./assets/img/galeri/bertani.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-purple">Panen Padi</div>
                                                {{-- <h2 class="post-title h3">Cras Fermentum Sem</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                    <div class="project item col-md-6 col-xl-4 workshop">
                                        <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img
                                                    src="./assets/img/galeri/doa.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-leaf">Doa Bersama</div>
                                                {{-- <h2 class="post-title h3">Mollis Ipsum Mattis</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                    <div class="project item col-md-6 col-xl-4 still-life">
                                        <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img
                                                    src="./assets/img/galeri/kerja-bakti.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-violet">Kerja Bakti</div>
                                                {{-- <h2 class="post-title h3">Ipsum Ultricies Cursus</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                    <div class="project item col-md-6 col-xl-4 product">
                                        <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img
                                                    src="./assets/img/galeri/sosialisasi.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-orange">Sosialisasi Kesehatan
                                                </div>
                                                {{-- <h2 class="post-title h3">Inceptos Euismod Egestas</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                    <div class="project item col-md-6 col-xl-4 product">
                                        <figure class="lift rounded mb-6"><a href="./single-project.html"> <img
                                                    src="./assets/img/galeri/ulangtahun.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-yellow">Ulang Tahun Desa</div>
                                                {{-- <h2 class="post-title h3">Sollicitudin Ornare Porta</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                    <div class="project item col-md-6 col-xl-4 workshop">
                                        <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img
                                                    src="./assets/img/galeri/wisata.jpg" alt="" /></a></figure>
                                        <div class="project-details d-flex justify-content-center flex-column">
                                            <div class="post-header">
                                                <div class="post-category text-line mb-3 text-green">Wisata Desa</div>
                                                {{-- <h2 class="post-title h3">Ipsum Mollis Vulputate</h2> --}}
                                            </div>
                                            <!-- /.post-header -->
                                        </div>
                                        <!-- /.project-details -->
                                    </div>
                                    <!-- /.project -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
