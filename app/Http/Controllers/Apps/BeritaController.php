<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::where('kategori', 'Berita')->orderBy('id_berita', 'desc')->paginate(8);
        return view('/apps/berita/index', compact('berita'));
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
        $berita = Berita::where('id_berita', $slug)->firstOrFail();
        $recent = Berita::where('kategori', 'Berita')->where('id_berita', '!=', $slug)->orderBy('id_berita', 'desc')->limit(5)->get();
        // $kategori = Kategori::all();
        return view('/apps/berita/detail', compact('berita', 'recent'));
    }
}
