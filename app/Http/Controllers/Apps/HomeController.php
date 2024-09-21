<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {

        // return view('welcome');
        $banner = Banner::all();
        // $berita = Berita::limit(6)->where('kategori', 'Berita')->orderBy('id_berita', 'desc')->get();
        // $pengumuman = Berita::limit(6)->where('kategori', 'Pengumuman')->orderBy('id_berita', 'desc')->get();
        return view('apps.home',compact('banner'));
    }
    public function ad()
    {
        $banner = Banner::all();
        return view('apps.ad', compact('banner'));
    }
    public function sejarah()
    {
        return view('apps.sejarah.index',);
    }
    public function visi()
    {
        return view('apps.visi.index',);
    }
    public function struktur()
    {
        return view('apps.struktur.index',);
    }
}
