<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentang()
    {
        return view('apps.profil.tentang');
    }
    public function struktur()
    {
        return view('apps.profil.struktur');
    }
    public function tugas()
    {
        return view('apps.profil.tugas');
    }
    public function fasilitas()
    {
        return view('apps.profil.fasilitas');
    }
    public function pejabat()
    {
        return view('apps.profil.pejabat');
    }
    public function visi_misi()
    {
        return view('apps.profil.visi-misi');
    }
    public function motto()
    {
        return view('apps.profil.motto');
    }
}
