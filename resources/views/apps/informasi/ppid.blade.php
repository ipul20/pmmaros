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
                <h2>INFORMASI DAN DOKUMEN PPID BDI MAKASSAR</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry ">
                            <p>Hak memperoleh informasi merupakan hak asasi manusia dan keterbukaan Informasi Publik
                                merupakan salah satu ciri penting negara demokratis. Balai Diklat Industri Makassar,
                                merupakan Unit Pelaksana Teknis dibawah Badan Pengembangan Sumber Daya Manusia Industri
                                (BPSDMI) Kementerian Perindustrian sebagai badan publik wajib menyediakan Informasi Publik
                                yang akurat, benar dan tidak menyesatkan kepada pemohon Informasi Publik sesuai dengan
                                Undang-undang nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP).</p>
                            <p>Demi mewujudkan pelayanan cepat, tepat dan sederhana, Balai Diklat Industri Makassar,
                                Kementerian Perindustrian menunjuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) dan
                                menyediakan sistem pelayanan informasi secara cepat, mudah dan wajar sesuai standar layanan
                                Informasi Publik nasional.</p>
                            <p>Balai Diklat Industri Makassar Kementerian Perindustrian telah membuka Desk Pelayanan
                                Informasi Publik Balai Diklat Industri Makassar yang beralamat di Jl. Perintis Kemerdekaan
                                KM 17, Kota Makassar
                            </p>
                            <p>Selain itu, juga telah dibuat sistem pelayanan informasi publik melalui website BDI Makassar
                                yang telah dikembangkan muatan informasinya sesuai amanat Undang -Undang Keterbukaan
                                Informasi Publik.</p>
                            <div class="faq-list">
                                <ul>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                                            1. Maklumat Pelayanan Keterbukaan Informasi Publik<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/maklumat-informasi.jpeg') }}"
                                                    class="img-fluid " />
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
                                            2. Struktur Organisasi<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/struktur-organisasi-ppid.jpeg') }}"
                                                    class="img-fluid w-100" />
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
                                            3. Tata Cara Permohonan Informasi<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/tata-cara-permohonan-informasi.jpg') }}"
                                                    class="img-fluid w-100" />
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">
                                            4. Formulir Permohonan Informasi Publik<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                            <p> 1. Unduh Formulir Permintaan Informasi :<br>

                                                <a target="_blank" href="{{ asset('landing/FORM-PERMOHONAN-INFORMASI-PUBLIK.pdf')}}">

                                                    <button type="button" class="btn btn-primary">Download</button></a>

                                            </p>
                                            <p> 2. Isi Formulir Permintaan Informasi : <br>
                                                <a target="_blank"
                                                    href="https://docs.google.com/forms/d/e/1FAIpQLSfJsu60_-lRUCD1_jLrsBAWu_vSa5bI1o4uMlTjfGXBhaZvSA/viewform?usp=pp_url">
                                                    <button type="button" class="btn btn-primary">Formulir Permintaan
                                                        Informasi</button></a>
                                            </p>

                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
