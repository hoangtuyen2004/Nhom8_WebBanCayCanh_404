<?php

namespace App\Http\Controllers\clients;

use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function deltail (String $id){
        $sanpham = SanPham::query()->findOrFail($id);
        $sanpham2 = Sanpham::get();
        return view('clients.sanpham.chitiet',compact('sanpham','sanpham2'));
    }
}
