<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepageAdmin()
    {
        return view('admin.homepage');
    }

    // jadwallll Kelas
    public function jadwalKelasSiswa()
    {
        return view('admin.jadwalKelas');
    }

    public function formKelasSiswa()
    {
        return view('admin.form.menambahkanData.formKelasSiswa');
    }
    
    // jadwal non akademik
    public function jadwalNonAkademikSiswa()
    {
        return view('admin.jadwalNonAkademikSiswa');
    }
    
    public function formNonAkademikSiswa()
    {
        return view('admin.form.menambahkanData.formNonAkademikSiswa');
    }

    // finansiall
    public function finansialSiswa()
    {
        return view('admin.finansialSiswa');
    }

    public function formFinansial()
    {
        return view('admin.formFinansial');
    }

    // beritaAdmin
    public function beritaAdmin()
    {
        return view('admin.berita');
    }

    public function formBerita()
    {
        return view('admin.form.menambahkanData.formBerita');
    }

    // data siswaaaaa
    public function data()
    {
        return view('admin.data');
    }

    public function formData()
    {
        return view('admin.form.menambahkanData.formDataSiswa');
    }

    // fitur bantuannnnn
    public function dokumenFiturBantuan()
    {
        return view('admin.fiturBantuan');
    }

    public function formFiturBantuan()
    {
        return view('admin.form.menambahkanData.formFiturBantuan');
    }

    // fitur tentang sekolah

    // fitur pusat bantuan

    // fitur pesan
}
