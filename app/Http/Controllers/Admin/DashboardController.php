<?php

namespace App\Http\Controllers\Admin;

use App\Models\Porto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Peixe;

class DashboardController extends Controller
{
    public function cadastros()
    {
        return view('admin.pages.cadastros');
    }

    public function portos()
    {
        $portos = Porto::all();
        return view('admin.pages.portos', compact('portos'));
    }

    public function peixes()
    {
        $peixes = Peixe::all();
        return view('admin.pages.peixes', compact('peixes'));
    }
}
