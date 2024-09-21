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
                <h2>Survey Indeks Persepsi Anti Korupsi (IPAK)</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <p>Sejalan dengan pelaksanaan Reformasi Birokrasi dan pembangunan Zona Integritas (ZI) menuju
                                Wilayah Bebas dari Korupsi dan Wilayah Birokrasi Bersih dan Melayani di lingkungan
                                Kementerian Perindustrian, Balai Diklat Industri Makassar berkomitmen untuk melakukan
                                perbaikan berkelanjutan dalam rangka meningkatkan kualitas layanan publik sesuai Peraturan
                                Presiden (PERPRES) Nomor 54 Tahun 2018 tentang Strategi Nasional Pencegahan Korupsi serta
                                mengacu pada PePeraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor
                                90 Tahun 2021 tentang Pembangunan dan Evaluasi Zona Integritas Menuju Wilayah Bebas dari
                                Korupsi dan Wilayah Birokrasi Bersih dan Melayani di Instansi Pemerintah.</p>
                            <p>Tujuan kuesioner ini adalah untuk memetakan persepsi pengguna layanan Balai Diklat Industri
                                Makassar dengan usaha pencegahan dan penanganan korupsi di lingkungan Balai Diklat Industri
                                Makassar. Melalui Survei Persepsi Korupsi ini kami berharap dapat memetakan potensi korupsi
                                untuk mendorong perbaikan layanan publik serta membangun etos kerja layanan yang bersih dan
                                bebas korupsi di lingkungan Balai Diklat Industri Makassar.
                            </p>
                            <p>Kami sangat menghargai kejujuran dan objektivitas bapak/ibu dalam mengisi seluruh data survei
                                ini. Partisipasi bapak/ibu sebagai responden akan membantu upaya pemberantasan korupsi di
                                wilayah NKRI. Kami menjamin bahwa semua data responden dan jawaban yang diberikan bersifat
                                RAHASIA serta tidak akan dipublikasikan sebagai jawaban pribadi responden.</p>
                            <div class="d-grid gap-2">
                                <a class="btn btn-info" type="button" href="https://docs.google.com/forms/d/e/1FAIpQLScUcvgigcF-QRmJc6qeKS08af7FQWK-a0-bojqlg2CuErsKqQ/viewform" style="color:white">Isi Survey</a>
                                <a class="btn btn-danger" type="button">Lihat Laporan Survey</a>
                            </div>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
