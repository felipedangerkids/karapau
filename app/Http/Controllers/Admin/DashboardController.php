<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function cadastros()
    {
        return view('admin.pages.cadastros');
    }

    public function portos()
    {
        return view('admin.pages.portos');
    }
}
