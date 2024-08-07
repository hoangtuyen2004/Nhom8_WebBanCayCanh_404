<?php

use App\Http\Controllers\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\clients\DetailController;
use App\Http\Controllers\clients\CartClientsController;
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

Route::get('sanpham/detail/{id}',[DetailController::class,'deltail'])->name('product-tetail');
Route::get('list-cart-user',[CartClientsController::class,'ListCartUser'])->name('list-cart');
Route::post('user-add-cart',[CartClientsController::class,'UserAddCart'])->name('add-cart');
Route::post('user-edit-cart',[CartClientsController::class,'UserEditCart'])->name('edit-cart');


// Route::
// Route resouce
Route::resource('sanpham', SanPhamController::class);

Route::get('/',[SanphamController::class,'index']);

Route::resource('danhmuc', DanhMucController::class);
Route::resource('admin-tai-khoans', App\Http\Controllers\admins\taikhoanController::class);
Route::get('wp-admin', [DashboardController::class, 'index'])->name('wp-admin');
Route::resource('admin-don-hang', App\Http\Controllers\admins\DonHangController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');