<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Daerah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function __construct()
    {
        $this->title = 'anggota';
        //        $this->middleware("roles:{$this->title}");
    }

    public function index()
    {
        $title = $this->title;
        $daerah = Daerah::orderBy('kode')->get();
        return view('admin.' . $title . '.index', compact('title', 'daerah'));
    }

    public function show(Request $request)
    {
        $jml = $request->jml == '' ? '5' : $request->jml;
        $title = $this->title;
        if (Auth::user()->role == "pd") {
            $daerah_id = Auth::user()->daerah_id;
            $data = Anggota::where('daerah_id', $daerah_id)->when($request->input('cari'), function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->input('cari')}%")
                    ->orWhere("alamat", "like", "%{$request->input('cari')}%")
                    ->orWhere("no_hp", "like", "%{$request->input('cari')}%");
            })
                ->paginate($jml);
            $view = view('admin.' . $this->title . '.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
                1) * $jml)->render();
        } else {

            $data = Anggota::when($request->input('cari'), function ($query) use ($request) {
                $query->where('nama', 'like', "%{$request->input('cari')}%")
                    ->orWhere("alamat", "like", "%{$request->input('cari')}%")
                    ->orWhere("no_hp", "like", "%{$request->input('cari')}%");
            })
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
        $model['kode_wilayah'] = "23";
        if (Auth::user()->role == "pd") {
            $model['daerah_id'] = Auth::user()->daerah_id;
        }
        $data = Anggota::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Anggota::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
        $model = $request->all();
        $data = Anggota::find($model['id']);
        $data = $data->update($model);
        return response()->json($data);
    }

    public function destroy($id)
    {

        $cek = Anggota::where('id', $id)->first();
        if (Auth::user()->role == 'pd') {
            if (Auth::user()->daerah_id == $cek['daerah_id']) {

                $data = $cek->delete();
            }
            $data = 0;
        } else {
            $data = $cek->delete();
        }
        return response()->json($data);
    }
}
