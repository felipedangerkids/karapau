<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();

        return view('seller.dashboard', compact('products'));
    }
}
