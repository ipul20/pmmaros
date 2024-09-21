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
            <h2>Profile Pejabat BDI Makassar</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog faq">
        <div class="container">

            <div class="row ">

                <div class="col ">
                    <div class="entry">
                        <div class="row">

                            <div class="col-lg-4 col-md-4 ">
                                <div class="px-5">
                                    <img src="{{asset('landing/images/pak-bagus.jpg')}}" class="img-fluid" style="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 ">
                                <h2 class="mt-3">BAGUS HERRY</h2>
                                <h5 style="color:grey">Kepala Balai Diklat Industri Makassar</h5>

                                <p>Lahir di Jakarta pada tanggal 12 Mei 1966. Bagus Herry dilantik menjadi Kepala Balai Diklat Industri Makassar pada tanggal 19 Agustus 2022. Selama menjadi Kepala, BDI Makassar telah memperoleh predikat Wilayah Bebas dari Korupsi (WBK) pada bulan Desember dari Kementerian Pemberdayaan Aparatur Negara dan Birokrasi.</p>
                                <p>Bagus Herry, Saat ini telah menduduki pangkat/golongan Penata Tk. I / III.d dan telah memperolah Satya lencana Karya Satya 10 tahun pada tahun 2001 dan Satya Lencana Karya Satya 20 tahun pada tahun 2011.</p>
                                <u>
                                    <h4>Educations</h4>
                                </u>
                                <ul>
                                    <li> S1 Manajemen Universitas Azzahra ( 2019 )</li>
                                    <li> Diklat Pim Tk. IV. </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-lg-4 col-md-4 ">
                                <div class="px-5">
                                    <img src="{{asset('landing/images/ibu-dwi.jpg')}}" class="img-fluid" style="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 ">
                                <h2 class="mt-3">DWIHANDAYANI</h2>
                                <h5 style="color:grey">Kepala Sub Bagian Tata Usaha Balai Diklat Industri Makassar</h5>

                                <p>Lahir di Bandung pada tanggal 16 Desember 1982. Dwihandayani dilantik menjadi Kepala Sub Bagian Tata Usaha Balai Diklat Industri Makassar pada tanggal 19 Agustus 2022. Sebelum menjadi Kasubag TU, Dwihandayani merupakan Kepala Seksi Pengembangan dan Kerjasama Diklat BDI Makassar </p>
                                <p>Dwihandayani, Saat ini telah menduduki pangkat/golongan Penata / III.c.
                                    <u>
                                        <h4>Educations</h4>
                                    </u>
                                <ul>
                                    <li> S1 Teknik dan Manajemen Industri Universitas Pasundan ( 2005 )</li>
                                    <li> S2 jurusan Teknik dan Manajemen Industri Institut Teknologi Bandung ( 2014 )</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->
@endsection
@push('JsScript')
@endpush