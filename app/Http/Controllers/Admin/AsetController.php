<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aset;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsetController extends Controller
{
    public function __construct()
    {
        $this->title = 'aset';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        $ruangan=Ruangan::orderBy('nama')->get();
        return view('admin.' . $title . '.index', compact('title','ruangan'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $title = $this->title;
        $data = Aset::when($request->input('cari'), function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->input('cari')}%")
                ->orWhere("kode", "like", "%{$request->input('cari')}%");
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
        $data = Aset::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Aset::where('id',$id)->first();
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $datas =1;
        $model = $request->all();
        $data = Aset::where('id',$model['id']);
        $data = $data->update($model);
        return response()->json($data);

    }

    public function destroy($id)
    {
        $data = Aset::where('id',$id)->delete();
        return response()->json($data);
    }
}
