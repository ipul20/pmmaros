<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->title = 'setting';
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
        $data = Setting::when($request->input('cari'), function ($query) use ($request) {
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
    public function update(Request $request)
    {
        $model = $request->all();
        $cek=Setting::first();
        $url = uploadFile_old(request()->file('struktur'), "gambar/struktur",$cek->struktur??null);
        $model['struktur'] = $url;
        $data = Setting::updateOrCreate(
            ['id' =>  1],
            [
                'email'=>$model['email'],
                'alamat'=>$model['alamat'],
                'periode'=>$model['periode'],
                'visi'=>$model['visi'],
                'misi'=>$model['misi'],
                'sejarah'=>$model['sejarah'],
                'struktur'=>$model['struktur'],
                ]
        );;
        return response()->json($data);
    }
}
