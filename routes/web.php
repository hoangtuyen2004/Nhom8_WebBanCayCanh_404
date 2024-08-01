<?php

use App\Http\Controllers\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\clients\DetailController;
use App\Http\Controllers\clients\HomeClientsController;

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

Route::get('/',[HomeClientsController::class,'index']);

Route::get('chitiet',[DetailController::class,'detail']);


// Route::
// Route resouce
Route::resource('sanpham', SanPhamController::class);

Route::get('/',[SanphamController::class,'index']);

Route::resource('danhmuc', DanhMucController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');