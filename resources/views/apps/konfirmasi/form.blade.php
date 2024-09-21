<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>Buku Tamu</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('css/classic/login-4.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex justify-content-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 mt-2 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    @php
                    $data = session()->get('data');
                    @endphp
                    <div class="login-signin">
                        <div class="mb-10">
                            <h3>Buku Tamu</h3>
                        </div>
                        <form class="form" id="kt_login_signin_form" method="POST" action="{{url('/buku-tamu/store')}}">

                            <div class="mb-2 px-2">
                                <label class="d-flex" for="nama">Nama</label>
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" id="nama" value='{{$data['nama']??''}}' placeholder="Masukkan Nama Anda" name="nama" autocomplete="off" />
                            </div>
                            @if(session()->get('kategori')=="instansi")

                            <div class="mb-2 px-2">
                                <label class="d-flex" for="instansi">Instansi</label>
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" id="instansi" value='{{$data['instansi']??''}}' placeholder="Masukkan Nama Instansi Anda" name="instansi" autocomplete="off" />
                            </div>
                            <div class="mb-2 px-2">
                                <label class="d-flex" for="jabatan">Jabatan</label>
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" id="jabatan" value='{{$data['jabatan']??''}}' placeholder="Masukkan Jabatan Anda" name="jabatan" autocomplete="off" />
                            </div>
                            @endif

                            <div class=" mb-2 px-2">

                                <label class="d-flex" for="nomor">Nomor HP</label>
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" id="nomor" value='{{ session()->get('nomor') }}' placeholder="Masukkan Nomor HP Anda" name="nomor" autocomplete="off" />
                            </div>

                            <div class="mb-2 px-2">
                                <label class="d-flex" for="alamat">Alamat</label>
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" id="alamat" value='{{$data['alamat']??''}}' placeholder="Masukkan Alamat Anda Lengkap dengan Kota/Kabupaten" name="alamat" autocomplete="off" />
                            </div>
                            <div class="mb-2 px-2">
                                <label class="d-flex" for="tujuan">Tujuan Kunjungan</label>
                                <select class="form-control form-control-solid" id="tujuan" name="tujuan" onchange="tujuanChange()" value="{{$data['tujuan']??''}}">
                                    <option selected disabled hidden>Pilih Tujuan Kunjungan</option>
                                    <option value="Pengambilan Sertifikat">Pengambilan Sertifikat</option>
                                    <option value="Kordinasi Kediklatan">Kordinasi Kediklatan</option>
                                    <option value="">Kordinasi Kerjasama</option>
                                    <option>Kunjungan Kerja</option>
                                    <option>Permintaan Informasi Publik</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <div id='lainnya'>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary font-weight-bold  px-8 py-4 my-3 mx-4">Simpan</button>
                            </div>
                        </form>

                    </div>
                    <!--end::Login Sign in form-->
                    <!--begin::Login Sign up form-->

                    <!--end::Login forgot password form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

    </script>
    <script>
        $(document).ready(function() {
            var tujuan = "{{$data['tujuan']??''}}";
            console.log(tujuan);
            if (!tujuan == '') {
                $('#tujuan').val(tujuan);
                if ($('#tujuan').val() == null) {

                    $('#tujuan').val('Lainnya');
                    $('#lainnya').append('<input class="form-control form-control-solid h-auto py-4  mt-2 px-8" type="text" id="tujuanlainnya" placeholder="Masukkan Tujuan Kunjungan" name="tujuan" autocomplete="off" />');
                    $('#tujuanlainnya').val(tujuan);


                }
            }
        });

        function tujuanChange() {
            var tujuan = $('#tujuan').val();
            if (tujuan == "Lainnya") {

                $('#lainnya').append('<input class="form-control form-control-solid h-auto py-4  mt-2 px-8" type="text" id="tujuanlainnya" placeholder="Masukkan Tujuan Kunjungan" name="tujuan" autocomplete="off" />');
            } else {
                $('#tujuanlainnya').remove();
            }
        }

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->

    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/custom/login/login-general.js"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
