<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Direktori;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DirektoriController extends Controller
{
    public function __construct()
    {
        $this->title = 'direktori';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        $jenis = Jenis::all();
        return view('admin.' . $title . '.index', compact('title', 'jenis'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $title = $this->title;
        $data = Direktori::when($request->input('cari'), function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->input('cari')}%");
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
        $url = uploadFile_old(request()->file('url'), "gambar/direktori", null);
        $thumbnail = uploadFile_old(request()->file('thumbnail'), "gambar/direktori", null);
        $model['url'] = $url;
        $model['thumbnail'] = $thumbnail;
        $model['slug'] = Str::slug($model['nama']);

        $data = Direktori::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Direktori::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Direktori::find($model['id']);
        $cek = $data->first();
        $url = uploadFile_old(request()->file('url'), "gambar/direktori", $cek->url);
        $thumbnail = uploadFile_old(request()->file('thumbnail'), "gambar/direktori", $cek->thumbnail);
        $model['url'] = $url;
        $model['thumbnail'] = $thumbnail;
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Direktori::find($id)->delete();
        return response()->json($data);
    }
}
