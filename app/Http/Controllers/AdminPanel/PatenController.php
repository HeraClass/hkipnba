<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatenController extends Controller
{
    public function pengajuanawal()
    {
        return view('admin.paten.pengajuan-awal');
    }

    public function terdaftar()
    {
        return view('admin.paten.terdaftar');
    }

    public function kelengkapandokumen()
    {
        return view('admin.paten.kelengkapan-dokumen');
    }

    public function mediasi()
    {
        return view('admin.paten.mediasi');
    }

    public function granted()
    {
        return view('admin.paten.granted');
    }
}
