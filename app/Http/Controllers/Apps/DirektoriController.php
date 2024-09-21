<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use App\Models\Direktori;
use Illuminate\Http\Request;

class DirektoriController extends Controller
{
    public function index($jenis,$direktori){
        $direktori=Direktori::where('slug',$direktori)->first();
        return view('apps.direktori.index',compact('direktori'));
    }
}
