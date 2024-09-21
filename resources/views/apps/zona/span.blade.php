@extends('apps.layouts.index')
@push('cssIndex')
@endpush
@section('content')
    <style>

       #buttonlapor:hover {
    box-shadow: 0 0 2px 1px red;
    ba
}
    </style>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ol>
                <h2>Apa itu SPAN Lapor</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <p>Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum
                                terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola
                                pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi
                                penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun
                                organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu,
                                untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem
                                pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu
                                saluran pengaduan secara Nasional.</p>
                            <p>Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan
                                Publik Nasional (SP4N) - Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah
                                layanan penyampaian semua aspirasi dan pengaduan masyarakat Indonesia melalui beberapa kanal
                                pengaduan yaitu website www.lapor.go.id, SMS 1708, twitter @lapor1708 dan aplikasi Android.
                                Lembaga pengelola SP4N-LAPOR! adalah Kementerian Pendayagunaan Aparatur Negara dan Reformasi
                                Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden (KSP)
                                sebagai Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai
                                Pengawas Pelayanan Publik. LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan
                                Pelayanan Publik Nasional (SP4N) berdasarkan Peraturan Presiden Nomor 76 Tahun 2013 dan
                                Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2015.
                            </p>
                            <p>SP4N-LAPOR! dibentuk untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak
                                masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara
                                pelayanan publik yang berwenang menanganinya. SP4N bertujuan agar:</p>
                            <ul>
                                <li>Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat,
                                    tuntas, dan terkoordinasi dengan baik;</li>
                                <li>Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan
                                    pengaduan; dan</li>
                                <li>Meningkatkan kualitas pelayanan publik.</li>
                            </ul>
                            <p>Jika anda terpaksa menerima, misalnya pemberian tersebut terlanjur disampaikan melalui orang
                                terdekat anda (suami, istri, anak, dan lain-lain) atau ada perasaan tidak enak karena dapat
                                menyinggung pemberi, maka sebaiknya hal tersebut segera dilaporkan kepada Unit Pengelola
                                Gratifikasi Kementerian Perindustrian secara online.</p>

                            <h5><u>Fitur-fitur yang ada pada SPAN Lapor</u></h5>
                            <ul>
                                <li>Anonim: Fitur yang bisa dipilih oleh pelapor yang akan membuat identitas pelapor tidak
                                    akan diketahui oleh pihak terlapor dan masyarakat umum.</li>
                                <li>Rahasia: Seluruh isi laporan tidak dapat dilihat oleh publik.</li>
                                <li>Tracking ID: Nomor unik yang berguna untuk meninjau proses tindak lanjut laporan yang
                                    disampaikan oleh masyarakat.</li>
                            </ul>
                            <a target="_blank" id="buttonlapor"
                                href="https://www.lapor.go.id/instansi/kementerian-perindustrian"
                                class="btn d-block" style="border-color:red">
                                <img src="{{ asset('/landing/images/logo-lapor.png') }}">
                            </a>

                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
@endpush
