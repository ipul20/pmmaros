<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->title = 'banner';
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
        $data = Banner::when($request->input('cari'), function ($query) use ($request) {
            $query->where('link', 'like', "%{$request->input('cari')}%");
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
        $url = uploadFile_old(request()->file('thumbnail'), "public/landing/images/slide/", null);
        $model['thumbnail']=$url;
        $data = Banner::create($model);
        return response()->json($data);
    }

    public function edit($id)
    {
        $model = Banner::find($id);
        return response()->json($model);
    }

    public function update(Request $request)
    {
       $model = $request->all();
        $data = Banner::find($model['id']);
        $cek = $data->first();
        $url = uploadFile_old(request()->file('thumbnail'), "public/landing/images/slide/", $cek->thumbnail);
       
        $model['thumbnail'] = $url;
        $data = $data->update($model);
        return response()->json($data);

    }

    public function destroy($id)
    {
        $data = Banner::find($id)->delete();
        return response()->json($data);
    }
}
