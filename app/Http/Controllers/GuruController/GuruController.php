<?php

namespace App\Http\Controllers\GuruController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function homepageGuru()
    {
        return view('guru.homepage');
    }

    public function nilaiSiswa()
    {
        return view('guru.nilai');
    }

    public function kehadiranSiswa()
    {
        return view('guru.kehadiran');
    }

    public function pusatBantuanGuru()
    {
        return view('guru.pusatBantuan');
    }
}
