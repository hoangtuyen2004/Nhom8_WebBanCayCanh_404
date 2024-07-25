<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admins\SanphamController;



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

// Route::get('/', function () {
//     return view('admins.sanpham.index');
// });


    Route::get('/',[SanphamController::class,'index']);
    
    Route::get('sanpham/test', [SanPhamController::class, 'test'])->name('sanpham.test');
    Route::resource('sanpham', SanPhamController::class);
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');