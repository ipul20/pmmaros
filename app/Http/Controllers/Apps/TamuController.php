<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {

        return view('apps.tamu.index');
    }
    public function cek(Request $request)
    {
        $req = $request->all();
        $cek = Tamu::where('nomor', $req['nomor'])->orderBy('id', 'desc')->first();
        return redirect('buku-tamu')->with(['nomor' => $req['nomor'], 'kategori' => $req['submit'], 'data' => $cek]);
    }
    public function form()
    {
        return view('apps.tamu.form');
    }
    public function store(Request $request)
    {
        $req = $request->all();
        $data = Tamu::create($req);
        return redirect('tamu')->with('status', 'berhasil mengisi buku tamu');
    }
}
