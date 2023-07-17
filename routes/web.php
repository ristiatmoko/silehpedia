<?php

use App\Http\Controllers\Dashboard\DashboardProductController;
use App\Http\Controllers\UserController;
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


Route::get('/dashboard', function() {
    return view('dashboard.home');
})->middleware('auth');


//Route::get('/dashboard', [DashboardProductController::class, 'index'])->middleware('auth')->name('dashboard');
//Route::get('/dashboard/product', [DashboardProductController::class, 'product'])->name('dashboard_product');

Route::resource('/dashboard/product', DashboardProductController::class);

Route::get('/dashboard/product/checkSlug', [DashboardProductController::class, 'checkSlug']);



/*
|--------------------------------------------------------------------------
| User Route
|--------------------------------------------------------------------------
*/



Route::get('/', function () {
    return view('users.home', [
    ]);
});

Route::get('/home', function () {
    return view('users.home', [
    ]);
});

Route::get('/register', [UserController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout']);


Route::resource('/user', UserController::class);


Route::get('/product', [ProductController::class, 'index'])->name('user_product');



Route::get('/product/{product:product_slug}', [ProductController::class, 'detail']);
