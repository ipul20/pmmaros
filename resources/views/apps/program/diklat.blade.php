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
                <h2>Diklat 3 in 1</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry ">
                            <p>Pendidikan dan Pelatihan (Diklat) yang dilaksanakan Balai Diklat Industri (BDI) Makassar
                                menggunakan sistem three in one atau disingkat Diklat 3 in 1 dimana terdapat 3 kegiatan
                                dalam 1 diklat yaitu pelatihan, sertifikasi kompetensi, dan penempatan kerja.</p>
                            <p>Pelatihan dilakukan dengan menggunakan kurikulum dan modul yang mengacu pada kebutuhan
                                industri agar terbentuk link and match antara lembaga pelatihan dengan perusahaan industri
                                untuk menghasilkan lulusan pelatihan yang kompeten dan siap kerja.</p>
                            <p>Pada akhir pelatihan dilakukan sertifikasi kompetensi terhadap peserta pelatihan, yang
                                bertujuan untuk memastikan bahwa lulusan pelatihan telah menguasai materi dan kompeten
                                sesuai bidangnya. Untuk proses sertifikasi BDI telah memiliki Lembaga Sertifikasi Profesi
                                (LSP) P1 BDI Makassar serta Tempat Uji Kompetensi (TUK) yang memadai serta asesor yang telah
                                disertifikasi. Setelah proses pelatihan dan sertifikasi selesai proses terakhir adalah
                                penempatan lulusan berdasarkan kerja sama yang telah disepakati dengan pihak industri.
                            </p>

                            <div class="faq-list">
                                <ul>
                                    <li data-aos-delay="200" class="item-list">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                                            class="collapsed">Persyaratan Calon Peserta Diklat <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p>&nbsp;1. Diklat 3 In 1 Pembuatan Desain Kemasan Produk Pangan<br />

                                                &nbsp;&nbsp;&nbsp; - Pendidikan terakhir minimal SMP sederajat
                                                dibuktikan dengan melampirkan foto copy ijazah<br />

                                                &nbsp;&nbsp;&nbsp; - Usia minimal 18 tahun, dibuktikan
                                                dengan Foto Copy Kartu Tanda Penduduk (KTP)<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak berstatus PNS/CPNS/TNI/POLRI<br />

                                                &nbsp;&nbsp;&nbsp; - Mampu mengoperasikan komputer<br />


                                                &nbsp;&nbsp;&nbsp; - Membawa surat tugas dari Perusahaan, Dinas / Kelompok
                                                Usaha Bersama<br />

                                                &nbsp;&nbsp;&nbsp; - Memiliki Surat Keterangan Usaha / SK pendirian kelompok
                                                usaha<br />

                                                &nbsp;&nbsp;&nbsp; - Pada saat mengikuti diklat peserta berpakaian rapi dan sopan serta tidak memakai sandal<br />

                                                &nbsp;&nbsp;&nbsp; - Belum pernah mengikuti diklat yang diselenggarakan oleh
                                                7 BDI<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak diperkenankan membawa anggota keluarga pada saat
                                                mengikuti diklat<br />

                                                &nbsp;&nbsp;&nbsp; - Berbadan sehat dan bagi peserta wanita tidak dalam keadaan hamil</p>



                                            <p>&nbsp;2. Diklat 3 In 1 Pembuatan Aneka Olahan Berbasis Ikan/Cokelat/Rumput
                                                Laut<br />

                                                &nbsp;&nbsp;&nbsp; - Pendidikan terakhir minimal SD sederajat dibuktikan
                                                dengan melampirkan foto copy ijazah<br />

                                                &nbsp;&nbsp;&nbsp; - Usia minimal 18 tahun, dibuktikan
                                                dengan Foto Copy Kartu Tanda Penduduk (KTP)<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak berstatus PNS/CPNS/TNI/POLRI<br />


                                                &nbsp;&nbsp;&nbsp; - Membawa surat tugas dari Perusahaan, Dinas / Kelompok
                                                Usaha Bersama<br />

                                                &nbsp;&nbsp;&nbsp; - Memiliki Surat Keterangan Usaha / SK pendirian kelompok
                                                usaha<br />

                                                &nbsp;&nbsp;&nbsp; - Pada saat mengikuti diklat peserta berpakaian rapi dan sopan serta tidak memakai sandal<br />

                                                &nbsp;&nbsp;&nbsp; - Belum pernah mengikuti diklat yang diselenggarakan oleh
                                                7 BDI<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak diperkenankan membawa anggota keluarga pada saat
                                                mengikuti diklat<br />

                                                &nbsp;&nbsp;&nbsp; - Berbadan sehat dan bagi peserta wanita tidak dalam keadaan hamil</p>



                                            <p>&nbsp;3. Diklat 3 In 1 Pengolahan dan Penyajian Kopi (Barista) / Penyangraian Kopi Biji<br />

                                                &nbsp;&nbsp;&nbsp; - Pendidikan terakhir minimal SMP sederajat
                                                dibuktikan dengan melampirkan foto copy ijazah <br />

                                                &nbsp;&nbsp;&nbsp; - Usia minimal 18 tahun, dibuktikan
                                                dengan Foto Copy Kartu Tanda Penduduk (KTP)<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak berstatus PNS/CPNS/TNI/POLRI<br />


                                                &nbsp;&nbsp;&nbsp; - Membawa surat tugas dari Perusahaan, Dinas / Kelompok
                                                Usaha Bersama/Cafe<br />

                                                &nbsp;&nbsp;&nbsp; - Memiliki Surat Keterangan Usaha / SK pendirian kelompok
                                                usaha<br />

                                                &nbsp;&nbsp;&nbsp; - Pada saat mengikuti diklat peserta berpakaian rapi dan sopan serta tidak memakai sandal<br />
                                                &nbsp;&nbsp;&nbsp; - Belum pernah mengikuti diklat yang diselenggarakan oleh
                                                7 BDI<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak diperkenankan membawa anggota keluarga pada saat
                                                mengikuti diklat<br />

                                                &nbsp;&nbsp;&nbsp; - Berbadan sehat dan bagi peserta wanita tidak dalam keadaan hamil</p>



                                            <p>&nbsp;4. Diklat 3 In 1 Pengolahan Kakao/Ikan Tuna<br />

                                                &nbsp;&nbsp;&nbsp; - Pendidikan terakhir minimal SMP sederajat
                                                dibuktikan dengan melampirkan foto copy ijazah<br />

                                                &nbsp;&nbsp;&nbsp; - Usia minimal 18 tahun, dibuktikan
                                                dengan Foto Copy Kartu Tanda Penduduk (KTP)<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak berstatus PNS/CPNS/TNI/POLRI<br />

                                                &nbsp;&nbsp;&nbsp; - Membawa surat tugas dari Perusahaan, Dinas / Kelompok
                                                Usaha Bersama<br />

                                                &nbsp;&nbsp;&nbsp; - Memiliki Surat Keterangan Usaha / SK pendirian kelompok
                                                usaha<br />

                                                &nbsp;&nbsp;&nbsp; - Pada saat mengikuti diklat peserta berpakaian rapi dan sopan serta tidak memakai sandal<br />

                                                &nbsp;&nbsp;&nbsp; - Belum pernah mengikuti diklat yang diselenggarakan oleh
                                                7 BDI<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak diperkenankan membawa anggota keluarga pada saat
                                                mengikuti diklat<br />

                                                &nbsp;&nbsp;&nbsp; - Berbadan sehat dan bagi peserta wanita tidak dalam keadaan hamil<br /><br>

                                                5. Diklat 3 In 1 Penyelia Halal<br />

                                                &nbsp;&nbsp;&nbsp; - Wajib Beragama Islam<br />

                                                &nbsp;&nbsp;&nbsp; - Pendidikan terakhir minimal SMA sederajat dibuktikan dengan
                                                melampirkan foto copy ijazah<br />

                                                &nbsp;&nbsp;&nbsp; - Usia minimal 18 tahun, dibuktikan
                                                dengan Foto Copy Kartu Tanda Penduduk (KTP)<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak berstatus PNS/CPNS/TNI/POLRI<br />

                                                &nbsp;&nbsp;&nbsp; - Mampu mengoperasikan komputer<br />


                                                &nbsp;&nbsp;&nbsp; - Membawa surat tugas dari Perusahaan, Dinas / Kelompok
                                                Usaha Bersama<br />

                                                &nbsp;&nbsp;&nbsp; - Memiliki Surat Keterangan Usaha / SK pendirian kelompok
                                                usaha<br />

                                                &nbsp;&nbsp;&nbsp; - Pada saat mengikuti diklat peserta berpakaian rapi dan sopan serta tidak memakai sandal<br />

                                                &nbsp;&nbsp;&nbsp; - Belum pernah mengikuti diklat yang diselenggarakan oleh
                                                7 BDI<br />

                                                &nbsp;&nbsp;&nbsp; - Tidak diperkenankan membawa anggota keluarga pada saat
                                                mengikuti diklat<br />

                                                &nbsp;&nbsp;&nbsp; - Berbadan sehat dan bagi peserta wanita tidak dalam keadaan hamil</p>


                                        </div>
                                    </li>

                                    <li data-aos-delay="300">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Alur
                                            Pendaftaran Calon Peserta<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p class="m-5 px-5">
                                                <img src="{{ asset('landing/images/alur-pendaftaran.jpeg') }}"
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
                                                <a target="_blank" href="https://sidia.kemenperin.go.id/register">

                                                   Daftar

                                                </a>
                                            </p>
                                        </div>
                                    </li>

                                    {{-- <li data-aos-delay="500">
                                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Materi
                                            dan Video <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                            <p>
                                                <a target="_blank" href="https://heyzine.com/flip-book/4a6c28ad66.html">

                                                    Materi Penerapan GMP

                                                </a><br>
                                                <a target="_blank" href="https://heyzine.com/flip-book/a0d31b777f.html">

                                                    Materi Pengenalan Cokelat

                                                </a><br>
                                                <a target="_blank" href="https://heyzine.com/flip-book/d2488ca48e.html">

                                                    Materi Penerapan K3

                                                </a>
                                            </p>
                                        </div>
                                    </li> --}}

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
