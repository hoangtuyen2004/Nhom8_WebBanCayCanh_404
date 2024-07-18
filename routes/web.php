<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});

// Route resouce
Route::resource('sanpham', SanPhamController::class);

Route::resource('test', TestController::class);
