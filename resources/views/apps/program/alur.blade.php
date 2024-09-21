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
                <h2>Alur Pelayanan</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry ">
                            <p>Pelayanan Publik merupakan fasilitas di dalam gedung kantor utama BDI Makassar yang melakukan
                                kegiatan penyelengaraan pelayanan publik. Tugas Pelayanan Publik adalah memberikan pelayanan
                                kepada masyarakat atau badan hukum atas permintaan informasi, konsultasi, dan pelaksanaan
                                pelayanan publik lainnya yang sesuai dengan ruang lingkup tugas dan fungsi BDI Makassar.</p>
                            <p>Asas Pelayanan Publik</p>
                            <ol>
                                <li>Transparan. Bersifat terbuka, mudah dan dapat diakses oleh semua pihak yang membutuhkan
                                    dan disediakan secara memadai serta mudah dimengerti.</li>
                                <li>Akuntabilitas. Dapat dipertanggungjawabkan sesuai dengan ketentuan peraturan
                                    perundang-undangan.</li>
                                <li>Kondisional. Sesuai dengan kondisi dan kemampuan pemberi dan penerima pelayanan dengan
                                    tetap berpegang pada prinsip efisiensi dan efektifitas. Waktu Layanan</li>
                                <li>Partisipatif. Mendorong peran serta masyarakat dalam penyelenggaraan pelayanan publik
                                    dengan memperhatikan aspirasi, kebutuhan, dan harapan masyarakat.</li>
                                <li>Kesamaan Hak. Tidak diskriminatif dalam arti tidak membedakan suku , ras, agama,
                                    golongan, gender dan status ekonomi.</li>
                                <li>Keseimbangan Hak dan Kewajiban. Pemberi dan penerima pelayanan publik harus memenuhi hak
                                    dan kewajiban masing-masing pihak sesuai ketentuan yang berlaku.</li>
                            </ol>

                            <p>Waktu Layanan :<br>
                                Senin s.d. Kamis : Pukul 08.30 - 12.00 dan 13.00 - 15.00 WITA<br>
                                Jumat : Pukul 08.30 - 11.00 dan 13.00 - 15.00 WITA</p>
                            <p>Informasi Lebih Lanjut<br>
                                Pelayanan Publik BDI Makassar<br>
                                Jalan Perintis Kemerdekaan KM 17, Makassar<br>
                                Telepon (0411) 556617<br>
                                WA +62 822-9331-9335<br>
                                Email bdimks.kemenperin@gmail.com</p>

                            <div class="faq-list">
                                <ul>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Alur Pendaftaran Calon Peserta Diklat<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/alur-pendaftaran.jpeg') }}"
                                                    class="img-fluid " />
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Alur Pendaftaran Calon Tenant Inkubator<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/pendaftaran-tenant.jpeg') }}"
                                                    class="img-fluid " />
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Alur Penyewaan Fasilitas Ruangan & Asrama<i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/penyewaan-fasilitas.jpeg') }}"
                                                    class="img-fluid " />
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
