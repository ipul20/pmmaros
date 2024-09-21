<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function maklumat()
    {
        return view('apps.zona.maklumat');
    }
    public function span()
    {
        return view('apps.zona.span');
    }
    public function wbs()
    {
        return view('apps.zona.wbs');
    }
    public function ipak()
    {
        return view('apps.zona.ipak');
    }
}
