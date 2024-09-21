<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->title = 'berita';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        $kategori = Kategori::all();
        return view('admin.' . $title . '.index', compact('title', 'kategori'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $title = $this->title;
        $data = Berita::when($request->input('cari'), function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->input('cari')}%")
                ->orWhere("alamat", "like", "%{$request->input('cari')}%")
                ->orWhere("no_hp", "like", "%{$request->input('cari')}%");
        })
            ->paginate($jml);
        $view = view('admin.' . $this->title . '.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
            1) * $jml)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view,
        ]);
    }

    public function store(Request $request)
    {
        $model = $request->all();
        // dd($model);
        $url = uploadFile_old(request()->file('header'), "gambar/header/", null);
        $model['thumbnail'] = $url;
        $data = Berita::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Berita::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Berita::find($model['id']);
        $cek = $data->first();
        $url = uploadFile_old(request()->file('header'), "gambar/header/", $cek->header);
        $model['header'] = $url;
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Berita::find($id)->delete();
        return response()->json($data);
    }
}
