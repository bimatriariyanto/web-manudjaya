@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section class="section-header pb-6 pb-lg-10 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <h1 class="display-1 mb-4">Surat Keterangan Warga Tidak Mampu</h1>
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
                    <iframe
                        src="https://docs.google.com/forms/d/e/1FAIpQLSdWOFskl0ttZuTCcyzQ1E9JzA460nO4kj9ThNLzBe47BrtfKA/viewform?embedded=true"
                        width="700" height="600" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                </div>

            </div>


        </div>
    </section>
@endsection
