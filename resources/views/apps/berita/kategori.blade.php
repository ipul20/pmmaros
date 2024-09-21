@extends('apps.layouts.index')
@section('content')
    <section class="about-one ">
        <div class="container text-center my-5">
                <h2 class="block-title__title">Berita Kategori {{$kategori}}</h2>

        </div><!-- /.container -->
    </section><!-- /.about-one  -->
    <section class="blog-one blog-page">
        <div class="container">
            <div class="row">
                @foreach ($berita as $v)
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img style="object-fit: cover;height:250px"
                                    src="{{ asset('gambar/header' . '/' . $v->header) }}" class="img-thumbnail"
                                    alt="Responsive image">
                                <a class="blog-one__plus" href="{{url('berita'.'/'.$v->slug)}}"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <div class="d-flex mb-3 blog-ket-berita">
                                    <div class="mr-2 blog-ket-berita"><i class="fa fa-calendar-alt mr-1"></i>
                                        {{ date('d/m/Y', strtotime($v->created_at)) }}</div>
                                    <a href="#" class="mr-2 blog-ket-berita"><i
                                            class="fa fa-user mr-2"></i>{{ Str::limit($v->User->name, 10) }}</a>
                                </div>

                                <h2 class="blog-one__title"><a href="{{url('berita'.'/'.$v->slug)}}">{{ Str::limit($v->judul,40) }}</a>
                                </h2><!-- /.blog-one__title -->
                                <div class="blog-one__text text-left">{{ Str::limit(strip_tags($v->isi), 50) }}</div><!-- /.blog-one__text -->
                                <a href="{{url('berita'.'/'.$v->slug)}}" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        {!! $berita->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
