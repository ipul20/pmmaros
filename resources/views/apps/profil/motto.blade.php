@extends('apps.layouts.index')
@push('cssIndex')
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ol>
                <h2>Motto BDI Makassar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <span style="">COKELAT ( <span style="color:red">C</span>AKAP, K<span
                                    style="color:red">O</span>MPETEN, <span style="color:red">K</span>REATIF,INT<span
                                    style="color:red">E</span>GRITAS, KO<span style="color:red">L</span>ABORATIF,BERD<span
                                    style="color:red">A</span>YA SAING,INOVA<span style="color:red">T</span>IF )
                            </span>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
