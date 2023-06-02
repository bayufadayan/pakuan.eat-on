<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
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
