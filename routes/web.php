<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::prefix('admin')->group(function () {
    Route::middleware(['auth:sanctum', 'admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->middleware(['auth:sanctum', 'admin']);
        Route::prefix('user-settings')->group(function () {
            Route::get('/', [UserController::class, 'index']);
            Route::get('add-user', [UserController::class, 'add_user']);
            Route::post('add-user', [UserController::class, 'insert_data']);
            Route::get('edit-user/{id}', [UserController::class, 'edit_user']);
            Route::post('edit-user/{id}', [UserController::class, 'update_user']);

            Route::get('delete-user/{id}', [UserController::class, 'delete_user']);
        });
        Route::prefix('resto-settings')->group(function () {
            Route::get('/', [RestoController::class, 'index']);
            Route::get('add-resto', [RestoController::class, 'add_resto']);
            Route::post('add-resto', [RestoController::class, 'insert_resto']);
            Route::get('edit-resto/{id}', [RestoController::class, 'edit_resto']);
            Route::post('edit-resto/{id}', [RestoController::class, 'update_resto']);

            Route::get('delete-resto/{id}', [RestoController::class, 'delete_resto']);
        });
        Route::prefix('item-settings')->group(function () {
            Route::get('/', [ItemController::class, 'index']);
            Route::get('add-item', [ItemController::class, 'add_item']);
            Route::post('add-item', [ItemController::class, 'insert_item']);
            Route::get('edit-item/{id}', [ItemController::class, 'edit_item']);
            Route::post('edit-item/{id}', [ItemController::class, 'update_item']);

            Route::get('delete-item/{id}', [ItemController::class, 'delete_item']);
        });
    });
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/terlaris', function () {
    return view('product-terlaris');
});

Route::get('/fastfood', [ItemController::class, 'ondashboard_fastfood']);

Route::get('/hematdompet', function () {
    return view('product-hematdompet');
});

Route::get('/minuman', [ItemController::class, 'ondashboard_minum']);

Route::get('/snack', [ItemController::class, 'ondashboard_snack']);

Route::get('/makanan', [ItemController::class, 'ondashboard_makan']);

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
