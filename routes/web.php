<?php

use App\Http\Controllers\Dashboard\DashboardProductController;
use App\Http\Controllers\Users\ProductController;
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

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardProductController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| User Route
|--------------------------------------------------------------------------
*/



Route::get('/', function () {
    return view('dashboard.home', [
    ]);
});

Route::get('/home', function () {
    return view('users.home', [
    ]);
});

Route::get('/product', [ProductController::class, 'index'])->name('user_product');

Route::get('/product/{product:product_slug}', [ProductController::class, 'detail']);
