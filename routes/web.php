<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin', function () {
    return view('admin.layouts.main-admin');
});


Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/terlaris', function () {
    return view('product-terlaris');
});

Route::get('/fastfood', function () {
    return view('product-fastfood');
});

Route::get('/hematdompet', function () {
    return view('product-hematdompet');
});

Route::get('/minuman', function () {
    return view('product-minuman');
});

Route::get('/snack', function () {
    return view('product-snack');
});

Route::get('/makanan', function () {
    return view('product-makanan');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/confirm', function () {
    return view('confirmorder');
});


Route::get('/signup', [RegistController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegistController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
