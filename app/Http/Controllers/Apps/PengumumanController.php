<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    
    public function index()
    {
        $pengumuman = Berita::where('kategori', 'Pengumuman')->orderBy('id_berita', 'desc')->paginate(8);
        return view('/apps/pengumuman/index', compact('pengumuman'));
    }
    public function author()
    {
    }
    public function kategori($kategori)
    {
        $kategori_id = Kategori::where('slug', $kategori)->firstOrFail();
        // dd($kategori_id);
        $berita = Berita::where('kategori_id', $kategori_id->id)->orderBy('id_berita', 'desc')->paginate(9);
        return view('/apps/berita/kategori', compact('berita', 'kategori'));
    }
    public function tag()
    {
    }
    public function detail($slug)
    {
        $pengumuman = Berita::where('kategori', 'Pengumuman')->where('id_berita', $slug)->firstOrFail();
        // $latest = Berita::where('slug', '!=', $slug)->latest()->limit(5)->get();
        // $kategori = Kategori::all();
        $recent = Berita::where('kategori', 'Pengumuman')->where('id_berita', '!=', $slug)->orderBy('id_berita', 'desc')->limit(5)->get();

        return view('/apps/pengumuman/detail', compact('pengumuman', 'recent'));
    }
}
