<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function __construct()
    {
        $this->title = 'dokumen';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $kategori = Kategori::all();

        $title = $this->title;
        return view('admin.' . $title . '.index', compact('title', 'kategori'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $bidang = $request->bidang;
        $title = $this->title;
        if (!$bidang) {
            
            $data = Dokumen::when($request->input('cari'), function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->input('cari')}%");
            })->orderBy('id','DESC')
                ->paginate($jml);
        } else {

            $data = Dokumen::where('kategori', $bidang)->when($request->input('cari'), function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->input('cari')}%");
            })->orderBy('id','DESC')
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

        $url = uploadFile_old(request()->file('dokumen'), "public/landing/dokumen", null);
        $model['dokumen'] = $url;
        $data = Dokumen::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Dokumen::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Dokumen::where('id',$model['id']);
        $cek = Dokumen::where('id',$model['id'])->first();
        // var_dump($request()->file('dokumen'));
        // var_dump($url);
        $url = uploadFile_old(request()->file('dokumen'), "public/landing/dokumen", $cek->dokumen);
        $model['dokumen'] = $url;
        $data = $data->update([
                'kategori_id'=>$model['kategori_id'],
                'dokumen'=>$model['dokumen'],
                'nama'=>$model['nama'],
            ]);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Dokumen::find($id)->delete();
        return response()->json($data);
    }
}
