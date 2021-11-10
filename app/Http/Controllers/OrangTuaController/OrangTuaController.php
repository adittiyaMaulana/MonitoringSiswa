<?php

namespace App\Http\Controllers\OrangTuaController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    // homepage
    public function homepage()
    {
        return view('orangtua.homepage');
    }

    // jadwal Kelas
    public function jadwalKelas()
    {
        return view('orangtua.jadwalKelas');
    }

    // jadwal Non Akademik
    public function jadwalNonAkademik()
    {
        return view('orangtua.jadwalNonAkademik');
    }

    // finansial
    public function finansial()
    {
        return view('orangtua.finansial');
    }

    // berita
    public function berita()
    {
        return view('orangtua.berita');
    }

    // nilai
    public function nilai()
    {
        return view('orangtua.nilai');
    }

    // kehadiran
    public function kehadiran()
    {
        return view('orangtua.kehadiran');
    }

    // fitur Bantuan
    public function fiturBantuan()
    {
        return view('orangtua.fiturBantuan');
    }

    // tentang Sekolah
    public function tentangSekolah()
    {
        return view('orangtua.tentangSekolah');
    }

    // pusatbantuan
    public function pusatBantuan()
    {
        return view('orangtua.pusatBantuan');
    }

    // pesan
    public function pesan()
    {
        return view('orangtua.pesan');
    }

}
