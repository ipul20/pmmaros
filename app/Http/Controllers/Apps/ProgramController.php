<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function diklat()
    {
        return view('apps.program.diklat');
    }
    public function inkubator()
    {
        return view('apps.program.inkubator');
    }
    public function majalah_inkubator()
    {
        return view('apps.program.majalah');
    }
    public function lsp()
    {
        return view('apps.program.lsp');
    }
    public function alur()
    {
        return view('apps.program.alur');
    }
}
