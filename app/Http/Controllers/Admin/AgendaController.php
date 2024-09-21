<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->title = 'agenda';
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
        $title = $this->title;
        $data = Agenda::when($request->input('cari'), function ($query) use ($request) {
            $query->where('nama_diklat', 'like', "%{$request->input('cari')}%");
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
        $url = uploadFile_old(request()->file('gambar'), "gambar/banner", null);
        $model['gambar'] = $url;
        $data = Agenda::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Agenda::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Agenda::find($model['id']);
        $cek = $data->first();
        $url = uploadFile_old(request()->file('gambar'), "gambar/banner", $cek->gambar);
        $model['gambar'] = $url;
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = Agenda::find($id)->delete();
        return response()->json($data);
    }
}
