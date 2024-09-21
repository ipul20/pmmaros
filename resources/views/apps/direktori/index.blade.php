@extends('apps.layouts.index')
@section('content')
    <section class="about-one ">
        <div class="container text-center">
            <h2 class="block-title__title">{{ $direktori->nama }}</h2>

        </div><!-- /.container -->
    </section><!-- /.about-one  -->
    <section class="blog-one blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src='{{ asset('gambar/direktori/' . $direktori->thumbnail) }}' width='200' height='400'
                            style="object-fit:cover; object-position:center;">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center">
                    <h3>UNDUH <a href='{{ asset('gambar/direktori/' . $direktori->url) }}' target="_blank">DISINI</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
