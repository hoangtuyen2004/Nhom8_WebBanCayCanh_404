<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
// use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\admins\DashboardController;
use App\Http\Controllers\admins\SanPhamController;

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
Route::resource('sanpham', SanphamController::class);

// Admin-quản lý danh mục
Route::resource('danhmuc', DanhMucController::class);
// Admin-quản lý tài khoản
Route::resource('admin-tai-khoans', App\Http\Controllers\admins\taikhoanController::class);
// Dashboard-admin
Route::get('wp-admin', [DashboardController::class, 'index'])->name('wp-admin');
// Admin-Quản lý đơn hàng
Route::resource('admin-don-hang', App\Http\Controllers\admins\DonHangController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');