@extends('apps.layouts.index')
@push('metaIndex')
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$pengumuman->judul}}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($pengumuman->deskripsi), 50) }}" />
    <meta property="og:image" itemprop="image" content="{{asset('/landing/images/berita'.'/'.$pengumuman->thumbnail)}}" />
@endpush
@push('cssIndex')
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/pengumuman') }}">Berita</a></li>
                </ol>
                <div class="title">
                    <h2>PENGUMUMAN</h2>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row ">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single pt-5">

                            <div class="entry-img d-flex justify-content-center">
                                <img src="{{ asset('/landing/images/berita') . '/' . $pengumuman->thumbnail }}" alt=""
                                    class="thumbnail-blog">
                            </div>

                            <h2 class="entry-title">
                                {{ $pengumuman->judul }}
                            </h2>

                            {{-- <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div> --}}

                            <div class="entry-content">

                                {!! $pengumuman->deskripsi !!}
                            </div>
                        </article><!-- End blog entry -->


                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($recent as $key => $v)
                                    <div class="post-item clearfix">
                                        <img src="{{ asset('/landing/images/berita') . '/' . $v->thumbnail }}"
                                            alt="">
                                        <h4><a
                                                href="{{ url('/berita' . '/' . $v->id_berita) }}">{{ Str::limit($v->judul, 50) }}</a>
                                        </h4>
                                    </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
