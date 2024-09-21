@extends('apps.layouts.index')
@section('content')
    <section class="about-one ">
        <div class="container text-center">
            <h2 class="block-title__title">Visi Misi</h2>

        </div><!-- /.container -->
    </section><!-- /.about-one  -->
    <section class="blog-one blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2>Visi</h2>
                </div>
                <div class="col-lg-9">
                    {!! $setting->visi !!}
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <h2>Misi</h2>
                </div>
                <div class="col-lg-9">
                    {!! $setting->misi !!}
                </div>
            </div>
        </div>
    </section>
@endsection
