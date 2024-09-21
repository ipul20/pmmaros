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
                <h2>Pengumuman</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="service" class="berita pt-0">
            <div class="container" data-aos="fade-up">
               

                <div class="row gy-4 mt-3">
                    @foreach ($pengumuman as $key => $v)
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('landing/images/berita') . '/' . $v->thumbnail }}" alt=""
                                        class="img-fluid" />
                                </div>
                                <h3>
                                    <a href="{{ url('/berita' . '/' . $v->id_berita) }}"
                                        class="stretched-link">{{ Str::limit($v->judul, 35) }}</a>
                                </h3>
                                <p>
                                    {{ Str::limit(strip_tags($v->deskripsi), 150) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Card Item -->
                    
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            {!! $pengumuman->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  artikel Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
