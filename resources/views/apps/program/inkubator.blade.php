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
                <h2>Inkubator Bisnis</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry ">
                            <p>Inkubator Bisnis adalah sebuah program kerja BDI Makassar dalam bentuk organisasi atau
                                lembaga yang memiliki
                                tujuan untuk mempercepat pengembangan dan keberhasilan usaha pemula dengan menyediakan
                                layanan dan sumber daya
                                yang diperlukan oleh usaha tersebut. </p>
                            <p>Adapun manfaat dari program inkubator bisnis adalah:</p>
                            <ol>

                                <li>Menciptakan dan menumbuhkan usaha baru yang mempunyai nilai ekonomi dan berdaya saing
                                    tinggi
                                </li>

                                <li>mendapatkan mentoring dalam memecahkan masalah yang dihadapi dan mendapatkan panduan
                                    dalam
                                    membangun atau mengembangkan usaha</li>

                            </ol>
                            <p>Sedangkan tujuan dari program inkubator
                                bisnis adalah memfasilitasi pengembangan dan pertumbuhan industri baru serta membina
                                wirausaha industri dan meningkatkan kemampuan IKM utamanya dalam hal manajemen usaha dan
                                pemasaran produk</p>
                            <p>Adapun Benefit yang diperoleh jika
                                terpilih menjadi tenant Inkubator Bisnis di BDI Makassar
                                adalah:</p>
                            <ul>

                                <li><span style="font-size:11pt"><span style=""><span style="f"><span
                                                    style="">Bantuan dana/modal usaha untuk biaya
                                                    operasional</span></span></span></span></li>

                                <li><span style="font-size:11pt"><span style=""><span style="f"><span
                                                    style="">Sharing workshop (menggunakan workshop di BDI Makassar
                                                    untuk produksi)</span></span></span></span></li>

                                <li><span style="font-size:11pt"><span style=""><span style="f"><span
                                                    style="">Pendampingan ManajemenBisnis</span></span></span></span>
                                </li>

                                <li><span style="font-size:11pt"><span style=""><span style="f"><span
                                                    style="">Bantuan Akses
                                                    Pemasaran</span></span></span></span></li>

                                <li><span style="font-size:11pt"><span style=""><span style="f"><span
                                                    style="">Pendampingan dan Informasi
                                                    Perizinan</span></span></span></span></li>

                            </ul>
                            <p>Untuk info lebih lanjut dapat Mengunjungi website <a href="https://inkubator.bdimakassar.id"
                                    target="_blank">INKUBATOR BDI MAKASSAR</a></p>
                            <div class="mb-5 col-lg-6 col-sm-12">
                                <a href="https://inkubator.bdimakassar.id" target="_blank">

                                    <img src='{{ asset('landing/images/ibt.jpg') }}' class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="faq-list">
                                <ul>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                                            class="collapsed">Persyaratan Calon Tenant BDI Makassar <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <ol class="faq">

                                                <li class="item-list">WNI,
                                                    domisili daerah Sulawesi Selatan dan Sulawesi
                                                    Barat
                                                </li>

                                                <li class="item-list">Usia

                                                    Maksimal 45
                                                    Tahun
                                                </li>
                                                <li class="item-list">Memiliki Jiwa Wirausaha Tinggi
                                                </li>

                                                <li class="item-list">Memiliki usaha
                                                    sudah berjalan minimal 1 tahun dengan kategori :
                                                    <ul type="disc" style="list-style:disc">
                                                        <li class="item-list"> Olahan Pangan (Makanan/Minuman) </li>
                                                        <li class="item-list"> Herbal</li>
                                                    </ul>
                                                </li>

                                                <li class="item-list">Wajib memiliki NIB ( Nomor Induk Berusaha ) sesuai
                                                    dengan kategori usaha
                                                </li>
                                                <li class="item-list">Belum
                                                    terdaftar pada inkubator bisnis
                                                    lain
                                                </li>


                                                <li class="item-list">Bukan
                                                    reseller/dropshipper
                                                </li>

                                            </ol>
                                        </div>
                                    </li>

                                    <li data-aos-delay="300">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Alur
                                            Seleksi Calon Peserta<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/alur-seleksi-inbis.png') }}"
                                                    class="img-fluid " />
                                            </p>
                                        </div>
                                    </li>

                                    <li data-aos-delay="400">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Formulir
                                            Calon Peserta Diklat<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                            <p>
                                                Pendaftaran calon tenant inkubator bisnis BDI Makassar tahun 2024 telah
                                                ditutup

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
