<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Opini;
use Illuminate\Http\Request;

class OpiniController extends Controller
{
    public function index()
    {
        $opini = Opini::orderBy('id', 'desc')->paginate(9);
        return view('/apps/opini/index',compact('opini'));
    }
    public function author()
    {
        
    }
    public function kategori($kategori)
    {
        $kategori_id=Kategori::where('slug',$kategori)->firstOrFail();
        // dd($kategori_id);
        $opini = Opini::where('kategori_id',$kategori_id->id)->orderBy('id', 'desc')->paginate(9);
        return view('/apps/opini/kategori',compact('opini','kategori'));
    }
    public function tag()
    {

    }
    public function detail($slug)
    {
        $berita= Opini::where('slug',$slug)->firstOrFail();
        $latest = Opini::where('slug','!=',$slug)->latest()->limit(5)->get();
        $kategori =Kategori::all();
        return view('/apps/opini/detail',compact('berita','latest','kategori'));

    }
}
