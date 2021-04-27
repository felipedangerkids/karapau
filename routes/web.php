<?php

use App\Http\Controllers\Auth\BuyerController;
use App\Http\Controllers\Auth\CustomLoginConstroller;
use App\Http\Controllers\Auth\IndividualBuyerController;
use App\Http\Controllers\Auth\SellerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::post('/login-custom', [CustomLoginConstroller::class, 'store'])->name('login.custom');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seller-register', [SellerController::class, 'index']);
Route::post('/seller-store', [SellerController::class, 'store'])->name('seller.register');

Route::get('buyer-choice', [BuyerController::class, 'index']);
Route::get('buyer-individual', [IndividualBuyerController::class, 'index']);
Route::post('buyer-store', [BuyerController::class, 'store'])->name('buyer.register');