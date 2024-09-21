<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuanganController extends Controller
{
    public function __construct()
    {
        $this->title = 'ruangan';
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
        $data = Ruangan::when($request->input('cari'), function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->input('cari')}%")
                ->orWhere("lokasi", "like", "%{$request->input('cari')}%");
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
        $data = Ruangan::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Ruangan::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $datas =1;
        $model = $request->all();
        $data = Ruangan::find($model['id']);
        $data = $data->update($model);
        return response()->json($data);

    }

    public function destroy($id)
    {
        $data = Ruangan::find($id)->delete();
        return response()->json($data);
    }
}
