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

    public function jadwalKelasSiswa()
    {
        return view('admin.jadwalKelas');
    }
}
