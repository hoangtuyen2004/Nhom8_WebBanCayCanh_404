<?php

use App\Http\Controllers\admins\DanhMucController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TestController;

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

    Route::get('/',[SanphamController::class,'index']);
    
// Route::resource('/',[HomeController::class,'index']);
// route::get('/',[HomeController::class,'index']);
    Route::resource('danhmuc', DanhMucController::class);
// Route::resource('test', TestController::class);
