<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InformasiController extends Controller
{
    public function ppid()
    {
        return view('apps.informasi.ppid');
    }
    public function agenda()
    {
        $agenda = Agenda::orderBy('mulai', 'DESC')->get();
        return view('apps.informasi.agenda', compact('agenda'));
    }
    public function berkala()
    {
        $kategori = Kategori::where('jenis', 'berkala')->with(array('Dokumen' => function($query) {
            $query->orderBy('nama', 'DESC');
         }))->get();
        return view('apps.informasi.informasi-berkala', compact('kategori'));
    }
     public function setiap_saat()
    {
        $kategori = Kategori::where('jenis', 'setiap')->with(array('Dokumen' => function($query) {
            $query->orderBy('nama', 'DESC');
        }))->get();
        return view('apps.informasi.informasi-setiap-saat', compact('kategori'));
    }
    public function evaluasi()
    {
        $res = Http::get('https://evaluasi.bdimakassar.id/api.php?daftar_evaluasi_kepuasan');
        $evaluasi = $res->json();
        return view('apps.informasi.evaluasi', compact('evaluasi'));
    }
}
