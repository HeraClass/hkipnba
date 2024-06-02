<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function merek()
    {
        return view('admin.merek');
    }
}
