@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section class="section-header pb-6 pb-lg-10 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <h1 class="display-1 mb-4">Profile Desa</h1>
                    {{-- <p class="lead text-muted">
                        {!! setting('meta_description') !!}
                    </p> --}}

                    @include('frontend.includes.messages')
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>

    <section class="section section-ld">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="display-6">Profil Desan Manud Jaya</div>
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mt-2" style="font-size: 12px;">
                                        <p class="text-justify">
                                            Lahirnya UU No.6/2014 telah memberikan angin segar kepada desa karena desa
                                            memiliki otonomi untuk mengatur urusan pemerintahannya sendiri. Desa bukan lagi
                                            sebagai obyek semata melainkan sebagai subyek yang dapat menyusun perencanaan,
                                            pelaksanaan hingga evaluasi pembangunan secara mandiri. Menurut UU No.6/2014,
                                            desa perlu mengatur dan mengurus urusan pemerintahan serta kepentingan
                                            masyarakat setempat berdasarkan inisiasi masyarakat, hak asal-usul dan hak
                                            tradisional yang diakui dan dihormati dalam sistem pemerintahan Indonesia.
                                            <br><br>
                                            Untuk menyusun perencanaan desa dibutuhkan kelengkapan data terkait
                                            kependudukan, kelembagaan dan karakteristik spesifik desa. Data desa yang
                                            terkini dan akurat akan menunjang terwujudnya kualitas dokumen perencanaan
                                            pembangunan desa yaitu RPJMDes dan RPKPDes dengan baik sebagaimana yang telah
                                            diatur dalam UU No.6/2014 tentang desa maupun Permendagri No.114/2014 tentang
                                            Pedoman Pembangunan Desa. Data desa yang lengkap dan dapat dipertanggungjawabkan
                                            juga berguna dalam mewujudkan pengelolaan dana desa yang efektif.
                                            <br><br>
                                            Data desa digunakan dalam proses analisis dan penyusunan program untuk
                                            merencanakan pembangunan desa agar pembangunan tersebut dapat diterima dan
                                            sesuai kebutuhan masyarakat. Penting bagi pemerintah desa untuk melakukan
                                            pendataan yang komprehensif. Hasil pendataan desa juga perlu dipublikasikan
                                            dalam bentuk monografi dan profil desa agar tersusun rapi dan lebih mudah
                                            dipahami oleh masyarakat umum. Mengutip dari buku masterplandesa.com menjawab,
                                            beberapa pertanyaan dan jawaban berikut dapat membantu kita untuk mengetahui apa
                                            itu Profil Desa dan bagaimana cara menyusunnya.
                                            <br><br>
                                            <b>Bagaimana strategi menyusun Profil Desa agar bisa mempromosikan potensi
                                                desa?</b>
                                            <br><br>
                                            <i> Dalam penyusunan Profil Desa diperlukan keterlibatan seluruh elemen
                                                masyarakat
                                                seperti masyarakat yang kaya, tokoh ulama atau pemuka agama, para pemuda,
                                                perempuan, dan pemerintah daerah. Dengan pelibatan inilah, potret kebutuhan
                                                masyarakat dapat diwujudkan dan menjadikan Profil Desa mewakili semua
                                                komponen
                                                lapisan masyarakat.
                                                <br><br>
                                                Dalam pelaksanaan penyusunan Profil Desa digunakan strategi “omong-omong,
                                                iming-iming, ameng-ameng”. Pada tahap awal, dibuat pembicaraan (omong)
                                                kepada
                                                seluruh komponen masyarakat terkait program yang akan dilaksanakan, lalu
                                                diiming-iming segala kemungkinan yang ada, dan terakhir adalah ameng-ameng
                                                dengan melakukan kunjungan ke desa-desa lain untuk mendapatkan pengetahuan
                                                lebih
                                                banyak.
                                                <br>
                                                <b>Bagaimana cara agar Profil Desa yang telah disusun bisa sinkron dengan
                                                    RPJMD
                                                    (Rencana Jangka Menengah Daerah) yang ada di tingkat Kabupaten?</i></b>
                                            <br><br>
                                            <i>RPJMD menjadi acuan dalam penyusunan Profil Desa. Profil Desa mengutamakan
                                                konsep “bottom up” yang artinya perencanaan dimulai dari tingkat RT, ke
                                                tingkat
                                                dusun lalu naik ke tingkat desa dengan mereview kebijakan yang ada di
                                                tingkat
                                                kecamatan dan kabupaten. Dengan konsep ini, maka dapat dipastikan kalau
                                                Profil
                                                Desa yang telah disusun akan sinkron dengan RPJMD di tingkat Kabupaten.</i>
                                            <br><br>
                                            <b> Bagaimana kita mengevaluasi kualitas profil desa?</b>
                                            <br><br>
                                            <i>Jika data dan informasi yang ada di dalam Profil Desa tidak lagi mencerminkan
                                                kondisi desa saat itu maka perlu dilakukan evaluasi. Cara melakukan evaluasi
                                                yaitu dengan memperbarui data, memastikan keakuratan data, dan jenis
                                                informasi
                                                yang disampaikan dalam profil desa sesuai dengan kondisi lapangan.
                                                <br><br>
                                                Profil desa merupakan dokumen yang berisikan data dan informasi mengenai
                                                desa.
                                                Profil desa penting disusun dan digunakan dalam proses perencanaan
                                                pembangunan
                                                desa agar pembangunan tersebut sesuai kebutuhan dan diterima masyarakat.
                                                Sesuai
                                                dengan amanat UU No.6/2014, dalam penyusunan profil desa dibutuhkan
                                                keterlibatan
                                                berbagai elemen masyarakat desa. Dengan begitu, diharapkan data dan
                                                informasi
                                                penting yang mencerminkan karakter desa hingga gambaran umum mengenai desa
                                                dapat
                                                tercermin dalam Profil Desa (OBS).</i>
                                        </p>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
@endsection
