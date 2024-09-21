<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Apps\OpiniController;
use App\Http\Controllers\Apps\BeritaController;
use App\Http\Controllers\Apps\DirektoriController;
use App\Http\Controllers\Apps\TamuController as Tamu;
use App\Http\Controllers\Apps\KonfirmasiController as Konfirmasis;
// use App\Http\Controllers\Apps\PengumumanController as Pengumuman;
use App\Http\Controllers\Apps\HomeController as Home;
use App\Http\Controllers\Apps\ProgramController as Program;
use App\Http\Controllers\Apps\ProfilController as Profil;
use App\Http\Controllers\Apps\ZonaController as Zona;
use App\Http\Controllers\Apps\InformasiController as Informasi;
use App\Http\Controllers\Apps\AppsheetController as Appsheet;


use App\Http\Controllers\Admin\DashboardController as Dashboard;
use App\Http\Controllers\Admin\UserController as User;
use App\Http\Controllers\Admin\ArtikelController as Artikel;
use App\Http\Controllers\Admin\KategoriController as Kategori;
use App\Http\Controllers\Admin\DokumenController as Dokumen;
use App\Http\Controllers\Admin\BannerController as Banner;
use App\Http\Controllers\Admin\AgendaController as Agenda;
use App\Http\Controllers\Admin\PanitiaController as Panitia;
use App\Http\Controllers\Admin\KonfirmasiController as Konfirmasi;
use App\Http\Controllers\Admin\RuanganController as Ruangan;
use App\Http\Controllers\Admin\AsetController as Aset;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [Home::class, 'index'])->name('index');
Route::get('/appsheet', [Appsheet::class, 'getData'])->name('getData.Appsheet');

Route::group(['prefix' => '', 'middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', [Dashboard::class, 'index'])->name('dashboard');


    Route::group(['prefix' => '/admin'], function () {

        Route::group(['prefix' => '/user'], function () {
            Route::get('/', [User::class, 'index'])->name('user');
            Route::get('/data', [User::class, 'show'])->name('user.data');
            Route::post('/store', [User::class, 'store'])->name('user.store');
            Route::get('/edit/{id}', [User::class, 'edit'])->name('user.edit');
            Route::post('/update', [User::class, 'update'])->name('user.update');
            Route::get('/delete/{id}', [User::class, 'destroy'])->name('user.delete');
        });
        // Route::post('/remove-bg', [Panitia::class, 'remove_bg']);

        

        Route::group(['prefix' => '/banner'], function () {
            Route::get('/', [Banner::class, 'index'])->name('banner.riwayat');
            Route::get('/data', [Banner::class, 'show'])->name('banner.data');
            Route::post('/store', [Banner::class, 'store'])->name('banner.store');
            Route::get('/edit/{id}', [Banner::class, 'edit'])->name('banner.edit');
            Route::post('/update', [Banner::class, 'update'])->name('banner.update');
            Route::get('/delete/{id}', [Banner::class, 'destroy'])->name('banner.delete');
        });
        Route::group(['prefix' => '/agenda'], function () {
            Route::get('/', [Agenda::class, 'index'])->name('agenda.riwayat');
            Route::get('/data', [Agenda::class, 'show'])->name('agenda.data');
            Route::post('/store', [Agenda::class, 'store'])->name('agenda.store');
            Route::get('/edit/{id}', [Agenda::class, 'edit'])->name('agenda.edit');
            Route::post('/update', [Agenda::class, 'update'])->name('agenda.update');
            Route::get('/delete/{id}', [Agenda::class, 'destroy'])->name('agenda.delete');
        });
        
        Route::group(['prefix' => '/artikel'], function () {
            Route::get('/', [Artikel::class, 'index'])->name('artikel.riwayat');
            Route::get('/data', [Artikel::class, 'show'])->name('artikel.data');
            Route::post('/store', [Artikel::class, 'store'])->name('artikel.store');
            Route::get('/edit/{id}', [Artikel::class, 'edit'])->name('artikel.edit');
            Route::post('/update', [Artikel::class, 'update'])->name('artikel.update');
            Route::get('/delete/{id}', [Artikel::class, 'destroy'])->name('artikel.delete');
        });
        Route::group(['prefix' => '/dokumen'], function () {
            Route::get('/', [Dokumen::class, 'index'])->name('dokumen.riwayat');
            Route::get('/data', [Dokumen::class, 'show'])->name('dokumen.data');
            Route::post('/store', [Dokumen::class, 'store'])->name('dokumen.store');
            Route::get('/edit/{id}', [Dokumen::class, 'edit'])->name('dokumen.edit');
            Route::post('/update', [Dokumen::class, 'update'])->name('dokumen.update');
            Route::get('/delete/{id}', [Dokumen::class, 'destroy'])->name('dokumen.delete');
        });
        Route::group(['prefix' => '/konfirmasi'], function () {
            Route::get('/', [Konfirmasi::class, 'index'])->name('konfirmasi.riwayat');
            Route::get('/data', [Konfirmasi::class, 'show'])->name('konfirmasi.data');
            Route::post('/store', [Konfirmasi::class, 'store'])->name('konfirmasi.store');
            Route::get('/edit/{id}', [Konfirmasi::class, 'edit'])->name('konfirmasi.edit');
            Route::post('/update', [Konfirmasi::class, 'update'])->name('konfirmasi.update');
            Route::get('/delete/{id}', [Konfirmasi::class, 'destroy'])->name('konfirmasi.delete');
        });
        Route::group(['prefix' => '/kategori'], function () {
            Route::get('/', [Kategori::class, 'index'])->name('kategori.riwayat');
            Route::get('/data', [Kategori::class, 'show'])->name('kategori.data');
            Route::post('/store', [Kategori::class, 'store'])->name('kategori.store');
            Route::get('/edit/{id}', [Kategori::class, 'edit'])->name('kategori.edit');
            Route::post('/update', [Kategori::class, 'update'])->name('kategori.update');
            Route::get('/delete/{id}', [Kategori::class, 'destroy'])->name('kategori.delete');
        });
        Route::group(['prefix' => '/ruangan'], function () {
            Route::get('/', [Ruangan::class, 'index'])->name('ruangan.riwayat');
            Route::get('/data', [Ruangan::class, 'show'])->name('ruangan.data');
            Route::post('/store', [Ruangan::class, 'store'])->name('ruangan.store');
            Route::get('/edit/{id}', [Ruangan::class, 'edit'])->name('ruangan.edit');
            Route::post('/update', [Ruangan::class, 'update'])->name('ruangan.update');
            Route::get('/delete/{id}', [Ruangan::class, 'destroy'])->name('ruangan.delete');
        });
        Route::group(['prefix' => '/aset'], function () {
            Route::get('/', [Aset::class, 'index'])->name('aset.riwayat');
            Route::get('/data', [Aset::class, 'show'])->name('aset.data');
            Route::post('/store', [Aset::class, 'store'])->name('aset.store');
            Route::get('/edit/{id}', [Aset::class, 'edit'])->name('aset.edit');
            Route::post('/update', [Aset::class, 'update'])->name('aset.update');
            Route::get('/delete/{id}', [Aset::class, 'destroy'])->name('aset.delete');
        });

        Route::post('/gantipass', [Password::class, 'ganti'])->name('password.ganti');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/opini', [OpiniController::class, 'index']);
Route::get('/opini/{slug}', [OpiniController::class, 'detail']);
Route::get('/opini/kategori/{kategori}', [OpiniController::class, 'kategori']);



Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/berita/author/{name}', [BeritaController::class, 'author']);
Route::get('/berita/kategori/{kategori}', [BeritaController::class, 'kategori']);
Route::get('/berita/tag/{tag}', [BeritaController::class, 'tag']);

// Route::get('/pengumuman', [Pengumuman::class, 'index']);
// Route::get('/pengumuman/{slug}', [Pengumuman::class, 'detail']);

Route::get('/sejarah', [Home::class, 'sejarah']);
Route::get('/visi-misi', [Home::class, 'visi']);
Route::get('/struktur', [Home::class, 'struktur']);
Route::get('/direktori/{jenis}/{direktori}', [DirektoriController::class, 'index']);


//route untuk sub program
Route::get('/diklat-3-in-1', [Program::class, 'diklat']);
Route::get('/majalah-inkubator', [Program::class, 'majalah_inkubator']);
Route::get('/inkubator-bisnis', [Program::class, 'inkubator']);
Route::get('/lsp', [Program::class, 'lsp']);
Route::get('/alur-pelayanan', [Program::class, 'alur']);

//route untuk sub profil
Route::get('/tentang', [Profil::class, 'tentang']);
Route::get('/struktur', [Profil::class, 'struktur']);
Route::get('/tugas', [Profil::class, 'tugas']);
Route::get('/fasilitas', [Profil::class, 'fasilitas']);
Route::get('/profile-pejabat', [Profil::class, 'pejabat']);
Route::get('/visi-misi', [Profil::class, 'visi_misi']);
Route::get('/motto', [Profil::class, 'motto']);


//route untuk sub zona integritas
Route::get('/maklumat', [Zona::class, 'maklumat']);
Route::get('/span-lapor', [Zona::class, 'span']);
Route::get('/wbs', [Zona::class, 'wbs']);
Route::get('/ipak', [Zona::class, 'ipak']);


// route untuk sub informasi
Route::get('/ppid', [Informasi::class, 'ppid']);
Route::get('/agenda-kegiatan-diklat', [Informasi::class, 'agenda']);
Route::get('/dokumen/berkala', [Informasi::class, 'berkala']);
Route::get('/dokumen/setiap-saat', [Informasi::class, 'setiap_saat']);
Route::get('/hasil-evaluasi', [Informasi::class, 'evaluasi']);

//route untuk buku tamu
Route::get('/tamu', [Tamu::class, 'index']);
Route::post('/cek-tamu', [Tamu::class, 'cek'])->name('cek-tamu');
Route::get('/buku-tamu', [Tamu::class, 'form']);
Route::post('/buku-tamu/store', [Tamu::class, 'store']);

//route untuk konfirmasi pengajar
Route::get('/konfirmasi-pengajar/{jenis}/{angkatan}', [Konfirmasis::class, 'index']);
Route::post('/konfirmasi-pengajar', [Konfirmasis::class, 'store'])->name('konfirmasi-pengajar');
