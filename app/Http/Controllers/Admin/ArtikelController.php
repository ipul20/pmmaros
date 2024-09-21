<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->title = 'artikel';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        return view('admin.' . $title . '.index', compact('title'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $bidang = $request->bidang;
        $title = $this->title;
        if (!$bidang) {
            $data = Berita::when($request->input('cari'), function ($query) use ($request) {
                $query->where('judul', 'like', "%{$request->input('cari')}%");
            })->orderBy('id_berita','DESC')
                ->paginate($jml);
        } else {
            $data = Berita::where('kategori', $bidang)->when($request->input('cari'), function ($query) use ($request) {
                $query->where('judul', 'like', "%{$request->input('cari')}%");
            })->orderBy('id_berita','DESC')
                ->paginate($jml);
        }
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
        $url = uploadFile_old(request()->file('thumbnail'), "public/landing/images/berita", null);
        $model['thumbnail'] = $url;
        // $model['created_by'] = Auth::user()->id ?? 1;
        $data = Berita::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Berita::where('id_berita',$id)->first();
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Berita::where('id_berita',$model['id']);
        $cek = $data->first();
        $url = uploadFile_old(request()->file('thumbnail'), "public/landing/images/berita", $cek->thumbnail);
        $model['thumbnail'] = $url;
        $data = $data->update([
            'thumbnail'=>$model['thumbnail'],
            'kategori'=>$model['kategori'],
            'judul'=>$model['judul'],
            'deskripsi'=>$model['deskripsi'],
        ]);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Berita::where('id_berita',$id)->delete();
        return response()->json($data);
    }
}
