<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PeixeController;
use App\Http\Controllers\Admin\PortoController;
use App\Http\Controllers\Auth\BuyerController;
use App\Http\Controllers\Auth\CollectiveBuyer;
use App\Http\Controllers\Auth\CollectiveBuyerController;
use App\Http\Controllers\Auth\CustomLoginConstroller;
use App\Http\Controllers\Auth\IndividualBuyerController;
use App\Http\Controllers\Auth\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Seller\DashboardController;
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
    return view('auth.custom-login');
});


Auth::routes();

Route::post('/login-custom', [CustomLoginConstroller::class, 'store'])->name('login.custom');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seller', [SellerController::class, 'index']);
Route::post('/seller-store', [SellerController::class, 'store'])->name('seller.register');

Route::get('buyer-choice', [BuyerController::class, 'index']);
Route::get('buyer-individual', [IndividualBuyerController::class, 'index']);
Route::get('buyer-collective', [CollectiveBuyerController::class, 'index']);
Route::post('buyer-store', [BuyerController::class, 'store'])->name('buyer.register');

Route::get('seller-dashboard', [DashboardController::class, 'index'])->middleware('auth:seller')->name('dashboard');
Route::get('seller-step-one', [ProductController::class, 'stepOne'])->middleware('auth:seller');
Route::post('seller-step-one-post', [ProductController::class, 'postCreateStepOne'])->middleware('auth:seller');
Route::get('seller-step-two', [ProductController::class, 'stepTwo'])->middleware('auth:seller')->name('products.create.step.two');
Route::post('seller-step-two-post', [ProductController::class, 'postCreateStepTwo']);

Route::any('sessionforget', [ProductController::class, 'store']);



/*  admin */ 

Route::get('admin/cadastros', [AdminDashboardController::class, 'cadastros']);

Route::get('admin/cadastros/portos', [AdminDashboardController::class, 'portos']);
Route::get('admin/cadastros/peixes', [AdminDashboardController::class, 'peixes']);

Route::post('admin/cadastros/portos/store', [PortoController::class, 'store']);
Route::any('admin/cadastros/portos/delete/{id}', [PortoController::class, 'destroy']);

Route::post('admin/cadastros/peixe/store', [PeixeController::class, 'store']);