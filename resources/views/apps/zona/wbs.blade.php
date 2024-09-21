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
                <h2>WHISTLE BLOWING SYSTEM</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <p>Pelaporan pelanggaran (whistleblowing System) adalah pengungkapan tindakan pelanggaran atau
                                pengungkapan perbuatan yang melawan hukum, perbuatan tidak etis/tidak bermoral atau
                                perbuatan lain yang dapat merugikan organisasi maupun pemangku kepentingan yang dilakukan
                                oleh pejabat/pegawai kepada pimpinan atau lembaga lain yang dapat mengambil tindakan atas
                                pelanggaran tersebut.</p>
                            <p>Pelapor pelanggaran atau biasa disebut whistleblower adalah pejabat/pegawai di lingkungan
                                Kementerian Perindustrian yang melaporkan pelanggaran berupa perbuatan yang melanggar
                                peraturan perundang-undangan, kode etik, kebijakan dan tindakan lain yang sejenis berupa
                                ancaman langsung atas kepentingan umum, serta Korupsi, Kolusi dan Nepotisme (KKN) yang
                                terjadi di lingkungan Kementerian Perindustrian.</p>
                            <p>Hal tersebut diatas diatur melalui Peraturan Menteri Perindustrian Nomor 20/M-IND/PER/2/2015
                                tentang Pedoman Pelaksanaan Sistem Pelaporan Pelanggaran di Lingkungan Kementerian
                                Perindustrian.</p>
                            <a href="https://forms.gle/7ruQ5f8TQ65ei8yh8" class="btn btn-danger d-block"> Laporkan Pelanggaran</a>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
