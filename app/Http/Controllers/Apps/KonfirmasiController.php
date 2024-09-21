<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index($jenis, $angkatan)
    {
        $diklat = "";
        switch ($jenis) {
            case 'aoi':
                $diklat = "Aneka Olahan Berbasis Ikan Angkatan " . $angkatan;
                break;

            case 'aoc':
                $diklat = "Aneka Olahan Berbasis Cokelat Angkatan " . $angkatan;
                break;
        }
        return view('apps.konfirmasi.index', compact('diklat'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
