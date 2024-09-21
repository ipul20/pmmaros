@extends('apps.layouts.index')
@push('cssIndex')
@endpush
@section('content')
   <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            @foreach ($banner as $key => $v)
                @if ($v->link)
                    <a href="{{$v->link}}">
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="carousel-container">

                                <img src='{{ asset('landing/images/slide/' . $v->thumbnail) }}' class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </a>
                @else
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="carousel-container">

                                <img src='{{ asset('landing/images/slide/' . $v->thumbnail) }}' class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                @endif
            @endforeach


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="icon-boxes">
            <div class="container pt-4">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-4 d-flex icon-boxes-d align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <button onclick="window.location.href='{{ url('/diklat-3-in-1') }}'" class="icon-box">
                            <div class="icon"><i class="bx bxs-graduation"></i></div>
                            <h4 class="title"><a href="">DIKLAT 3 IN 1</a></h4>
                        </button>
                    </div>
                    <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <button onclick="window.location.href='{{ url('/inkubator-bisnis') }}'" class="icon-box">
                            <div class="icon"><i class="bx bx-bar-chart-alt"></i></div>
                            <h4 class="title"><a href="">INKUBATOR BISNIS</a></h4>
                        </button>
                    </div>

                    <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <button onclick="window.location.href='{{ url('/lsp') }}'" class="icon-box">
                            <div class="icon"><i class="bx bx-certification"></i></div>
                            <h4 class="title"><a href="">LEMBAGA SERTIFIKASI PROFESI</a></h4>
                        </button>
                    </div>
                </div>

            </div>
        </section><!-- End Icon Boxes Section -->

        <section id="services" class="services why-us pt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sejarah Pemuda Muhammadiyah</h2>
                    <p class="mx-lg-5">   Pemuda Muhammadiyah adalah organisasi otonom Muhammadiyah,
                        yang merupakan gerakan Islam, amar ma’ruf nahi munkar, bersumber pada Al-Quran dan As-Sunnah. yang berdiri pada 26 Dzulhijjah 1350 H bertepatan pada tanggal 2 Mei 1932 sebagai ortom Muhammadiyah melalui Majelis Tanwir.
                       <a
                            href="/sejarah">...selengkapnya</a>
                    </p>

                </div>
            </div>
        </section><!-- End Services Section -->


        {{-- <!-- ======= berita Section ======= -->
        <section id="service" class="berita pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Berita</h2>
                </div>

                <div class="row gy-4">
                    @foreach ($berita as $key => $v)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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
                    <div class="text-center mt-5"><a href="{{ url('/berita') }}" class="btn-show ">Lihat Semua Berita</a>
                    </div>

                </div>
            </div>
        </section> --}}
        <!--  artikel Section -->

        {{-- <section id="blog" class=" artikel berita">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-8 col-md-12 d-flex  mt-4 mt-md-0">
                        <div class="icon-box">
                            <h2><a class="title" href="#">Berita</a></h2>
                            <div class="row">
                                <div class="col d-flex mt-4 mt-md-0">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('landing/images/berita') . '/' . $berita[0]->thumbnail }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                        <h3>
                                            <a href="{{ url('/berita' . '/' . $berita[0]->id_berita) }}"
                                                class="stretched-link">
                                                {{ Str::limit($berita[0]->judul, 70) }}</a>
                                        </h3>
                                        <p>
                                            {{ Str::limit(strip_tags($berita[0]->deskripsi), 150) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col d-flex mt-4 mt-md-0">
                                    <div class="sidebar-item recent-posts">
                                        @foreach ($berita as $key => $v)
                                            @if ($loop->first)
                                                @continue
                                            @endif
                                            <div
                                                class="post-item clearfix @if ($key > 3) d-none d-md-block @endif">
                                                <img class="mr-2"
                                                    src="{{ asset('landing/images/berita') . '/' . $v->thumbnail }}"
                                                    alt="">
                                                <h4><a href="{{ url('/berita' . '/' . $v->id_berita) }}"
                                                        class="">{{ Str::limit($v->judul, 60) }}</a></h4>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>

                                <div class="text-center mt-5"><a href="{{ url('/berita') }}" class="btn-show ">Lihat
                                        Semua
                                        Berita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12  mt-4 mt-md-0 sidebar">
                        <h2><a class="title" href="#">Pengumuman</h2>

                        <div class="sidebar-item recent-posts mb-5">
                            <div>
                                @foreach ($pengumuman as $key => $v)
                                    <div
                                        class="post-item clearfix  @if ($key > 3) d-none d-md-block @endif">
                                        <img class="mr-2"
                                            src="{{ asset('landing/images/berita') . '/' . $v->thumbnail }}"
                                            alt="">
                                        <h4><a href="{{ url('/berita' . '/' . $v->id_berita) }}"
                                                class="">{{ Str::limit($v->judul, 60) }}</a></h4>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="d-flex justify-content-center mb-1">
                            <div class="text-center mt-5 d-flex position-absolute bottom-0 mb-3"><a
                                    href="{{ url('/pengumuman') }}" class="btn-show ">Lihat Semua
                                    Pengumuman</a>
                            </div>
                        </div>

                    </div>
                    <!-- End Card Item -->

                </div>
            </div>
        </section> --}}
        <!-- End artikel Section -->
        {{-- <!-- ======= pengumuman Section ======= -->
        <section id="service" class="berita pt-0 section-bg pt-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pengumuman</h2>
                </div>

                <div class="row gy-4">
                    @foreach ($pengumuman as $key => $v)
                        <div class="col-lg-4 col-md-6 @if ($key > 1) d-none d-md-block @endif"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('landing/images/berita') . '/' . $v->thumbnail }}" alt=""
                                        class="img-fluid" />
                                </div>
                                <h3>
                                    <a href="{{ url('/pengumuman' . '/' . $v->id_berita) }}"
                                        class="stretched-link">{{ Str::limit($v->judul, 35) }}</a>
                                </h3>
                                <p>
                                    {{ Str::limit(strip_tags($v->deskripsi), 150) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center mt-5"><a href="{{ url('/pengumuman') }}" class="btn-show ">Lihat Semua
                            Pengumuman</a></div>

                    <!-- End Card Item -->
                </div>
            </div>
        </section>
        <!-- End pengumuman Section --> --}}
        <!-- ======= Services Section ======= -->
        <section id="services" class="services why-us pt-5">
            <div class="container" data-aos="fade-up">



                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <h4><a href="#">MARS MUHAMMADIYAH</a></h4>
                            <div class="ratio ratio-16x9">
                            <video controls>
                                <source src="{{ asset('/landing/mars-muhammadiyah.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <h4><a href="#">MARS PEMUDA MUHAMMADIYAH</a></h4>
                           <div class="ratio ratio-16x9">
                            <video controls>
                                <source src="{{ asset('/landing/mars-pemuda.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <div class="col">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location</h4>
                                <p>Jl. Sultan Hasanuddin, Kec. Turikale, Kabupaten Maros, Sulawesi Selatan 90511</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:-">
                                    <h4>Email</h4>
                                    <p>-</p>
                                </a>
                            </div>

                           
                            <div class="phone">
                                <i class="bi bi-whatsapp"></i>
                                <a href="https://wa.me/62-">
                                    <h4>Whatsapp</h4>
                                    <p>-</p>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col" data-aos="fade-left" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-facebook"></i>
                                <a href="#">
                                    <h4>Facebook</h4>
                                    <p>-</p>
                                </a>
                            </div>
                            <div class="phone">
                                <i class="bi bi-instagram"></i>
                                <a href="https://www.instagram.com/pdpm_maros/">
                                    <h4>Instagram</h4>
                                    <p>Pemuda Muhammadiyah Maros</p>
                                </a>
                            </div>

                           
                            <div class="phone">
                                <i class="bi bi-youtube"></i>
                                <a href="#">
                                    <h4>Youtube</h4>

                                    <p>-r</p>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
