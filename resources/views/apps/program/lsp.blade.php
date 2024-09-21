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
                <h2>Lembaga Sertifikasi Profesi (LSP) P1 BDI Makassar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry ">
                            <p>Seiring dengan perkembangan globalisasi dunia yang kian kompleks, maka tuntutan terhadap
                                Sumber Daya Manusia semakin
                                menjadi persoalan yang teramat krusial. Di era kompetitif seperti ini setiap negara saling
                                berkompetisi "dengan berbagai macam cara"
                                untuk mempersiapkan SDM nya hingga mampu memenangkan persaingan dunia kerja dan memajukan
                                sektor industri. Dalam persoalan tersebut Indonesia
                                tengah bersiap siaga sedemikian rupa untuk mempersiapkan SDM yang handal guna memenangkan
                                persiangan baik secara nasional ataupun internasional.
                                Diantara antisipasi tersebut adalah apa yang termaktub dalam Undang-Undang No. 13 tahun 2003
                                tentang Ketenagakerjaan; Undang-Undang No. 20 tahun 2003
                                tentang Sistem Pendidikan Nasional; Peraturan Pemerintah Nomor 23 tahun 2004 tentang Badan
                                Nasional Sertifikasi Profesi.</p>
                            <p>Sebagai antisipasi atas perkembangan tersebut di atas serta dalam rangka meningkatkan
                                kualitas dan daya saing sumber daya manusia melalui sertifikasi kompetensi kerja di era
                                global, Pemerintah melalui BNSP telah mensosialisasikan sekaligus mengimplementasikan sistem
                                sertifikasi di dunia industri, melalui program percepatan pengakuan sertifikasi kompetensi
                                di perusahaan/industri bekerjasama dengan LSP terlisensi oleh BNSP.</p>

                            <p>Untuk menghadapi tantangan perubahan tersebut BDI Makassar telah memiliki Lembaga Sertifikasi
                                Profesi P1 Balai Diklat Industri Makassar yang selanjutnya disingkat LSP BDI Makassar. LSP
                                BDI Makassar adalah lembaga pelaksana kegiatan sertifikasi kompetensi profesi yang akan
                                melakasakan sertifikasi profesi khusus untuk alumni pelatihan di BDI Makassar. LSP BDI
                                Makassar memperoleh lisensi dari BNSP sejak tahun 2018 berdasarkan SK No.
                                KEP.0892/BNSP/VIII/2018 dengan Nomor Lisensi BNSP-LSP-618-ID. Saat ini LSP BDI Makassar
                                memiliki 9 skema sertifikasi kompetensi yang akan terus dikembangkan di masa mendatang
                                sesuai kebutuhan industri.</p>
                            <p>Untuk info lebih lanjut dapat Mengunjungi <a href="https://www.instagram.com/lspbdimks/"
                                    target="_blank">LSP BDI MAKASSAR</a></p>
                            <div class="mb-5 col-lg-6 col-sm-12">
                                <a href="https://www.instagram.com/lspbdimks/" target="_blank">

                                    <img src='{{ asset('landing/images/link-lsp.jpg') }}' class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="faq-list">
                                <ul>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Badan
                                            Nasional Sertifikasi Profesi (BNSP)<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p>BNSP merupakan badan independen yang bertanggung jawab kepada Presiden yang
                                                memiliki kewenangan sebagai otoritas sertifikasi personil dan bertugas
                                                melaksanakan sertifikasi kompetensi profesi bagi tenaga kerja. Pembentukan
                                                BNSP merupakan bagian integral dari pengembangan paradigma baru dalam sistem
                                                penyiapan tenaga kerja yang berkualitas. Berbeda dengan paradigma lama yang
                                                berjalan selama ini, sistem penyiapan tenaga kerja dalam format paradigma
                                                baru terdapat dua prinsip yang menjadi dasarnya, yaitu : pertama, penyiapan
                                                tenaga kerja didasarkan atas kebutuhan pengguna (demand driven); dan kedua,
                                                proses diklat sebagai wahana penyiapan tenaga kerja dilakukan dengan
                                                menggunakan pendekatan pelatihan berbasis kompetensi (Competency Based
                                                Training / CBT). Pengembangan sistem penyiapan tenaga kerja dengan paradigma
                                                baru ini dimulai pada awal tahun 2000 yang ditandai dengan ditandatanganinya
                                                Surat Kesepakatan Bersama (SKB) antara Menteri Tenaga Kerja, Menteri
                                                Pendidikan Nasional, Ketua Umum Kadin Indonesia.</p>
                                        </div>
                                    </li>

                                    <li data-aos-delay="300">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Skema
                                            Sertifikasi di LSP BDI Makassar<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="faq">
                                            <ol class="item-list">

                                                <li>Operator Mesin PengolahanKakao
                                                </li>
                                                <li>Operator Mesin Pengolahan Rumput Laut</li>
                                                <li>Pengolahan Ikan Tuna Segar Beku</li>
                                                <li>Pembuatan Desain Kemasan Produk Pangan</li>
                                                <li>Pembuatan Aneka Olahan Berbasis Cokelat</li>
                                                <li>Pembuatan Aneka Olahan Berbasis Rumput Laut</li>
                                                <li>Pembuatan Aneka Olahan Berbasis Ikan </li>
                                                <li>Pengolahan dan Penyajian Kopi - (Barista)</li>
                                                <li>Penyelia Halal</li>
                                                <li>Roasting Kopi</li>
                                                <li>Pengolahan Makanan</li>
                                            </ol>
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
