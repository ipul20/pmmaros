@extends('apps.layouts.index')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs">

        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
            </ol>
            <h2 class="block-title__title">Majalah Inkubator Bisnis</h2>

        </div><!-- /.container -->
    </section><!-- /.about-one  -->
    <section id="blog" class="blog faq">
        <div class="container">

            <div class="row">

                <div class="col ">

                    <embed type="application/pdf" src="{{ asset('/landing/majalah.pdf') }}" width="100%"
                        height='600'></embed>
                </div>
            </div>

        </div>
    </section>
@endsection
