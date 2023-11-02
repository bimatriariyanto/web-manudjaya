@extends('tampil/layouts/master')
@section('content')
    <section class="wrapper bg-soft-blue">
        <div class="container pt-6 pt-md-10 pb-4">
            <div class="row">
                <div class="col-lg-12">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Profil</a></li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">Tentang Desa Manud Jaya
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
            <div class="row">


                <div class="col-lg-8">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="display-6">{{ $posts['name'] }}</div>
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content p-2" style="font-size: 12px;">
                                        <p class="text-justify">
                                            @php
                                                echo $posts['content'];
                                            @endphp
                                        </p>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 rounded ">
                    <div class="card mt-2 p-3">
                        <span class=" fw-bold border-bottom border-success  ">
                            Perangkat Desa
                        </span>
                        <br>
                        <div class="swiper-container dots-closer blog grid-view mb-6 text-center" data-margin="20"
                            data-nav="false" data-dots="true" data-items-xl="1" data-items-md="1" data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <figure class="rounded"><img src="{{ url('/assets/img/kepala-desa.png') }}"
                                                alt="" style="height:180px; width:360px;" /></figure>
                                        <div class="caption-wrapper p-12">
                                            <div
                                                class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                                <h5 class="mb-0">Kepala Desa Manud Jaya</h5>
                                            </div>
                                            <!--/.caption -->
                                        </div>

                                    </div>
                                    <div class="swiper-slide">
                                        <figure class="rounded"><img src="{{ url('/assets/img/kepala-desa.png') }}"
                                                alt="" style="height:180px; width:360px;" /></figure>

                                    </div>


                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->



                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
