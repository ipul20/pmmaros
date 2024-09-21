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
                <h2>Visi-Misi BDI Makassar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <h3 class="">
                                Visi Balai Diklat Industri
                                Makassar
                            </h3>

                            <p>Sebagai
                                Center of Excellences penyiapan Sumber Daya Manusia Industri Kompeten
                            </p>
                            <h3 class="">Misi Balai Diklat Industri Makassar
                            </h3>
                            <ol style="">
                                <li>
                                    <p>
                                        Mengembangkan ruang lingkup dan spesialisasi jenis pelatihan yang
                                        sesuai dengan kebutuhan industri
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        mengembangkan program dan modul pelatihan berbasis
                                        kompetensi</p>
                                </li>
                                <li>
                                    <p>
                                        menyelenggarakan pelatihan berbasi kompetensi (skilling,Up-skilling,
                                        dan re-skilling) tenaga kerja industri dengan sistem 3 in
                                        1</p>
                                </li>
                                <li>
                                    <p>
                                        mengembangkan skema dan uji kompetensi
                                        LSP</p>
                                </li>
                                <li>
                                    <p>
                                        mengembangkan sertifikasi kompetensi
                                        internasional

                                    </p>
                                </li>
                            </ol>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
