<?php

namespace App\Http\Controllers\clients;

use App\Models\Giohang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartClientsController extends Controller
{
    public function ListCartUser(){
        // session()->put('cart',[]);
        $cart = session()->get('cart',[]);
        // dd($cart);
        return view('clients.sanpham.giohang',compact('cart'));
    }
    public function UserAddCart(Request $request){
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $sanpham = SanPham::query()->findOrFail($productId);

        //khởi tạo 1 mảng chưa thông tin giỏ hàng trên session 
        $cart =session()->get('cart',[]);
    

        if(isset($cart[$productId])){
            //sản phẩm có tồn tại trong giỏ hàng không
            $cart[$productId]['so_luong']+=$quantity;
        }else{
            //sản phẩm không có trong giỏ hàng
            $cart [$productId]=[
                'so_luong' => $quantity,
                'ten_san_pham' => $sanpham -> ten_san_pham,
                'anh_san_pham' => $sanpham -> anh_san_pham,
                'gia_san_pham'=>$sanpham -> gia_san_pham 

            ];
        }
    // dd($cart[$productId]);

    //     Giohang::create([
    //     'so_luong' => $cart[$productId]['so_luong'],
    //     'hinh_anh_san_pham' => $cart[$productId]['anh_san_pham'],
    //     'gia_san_pham' => $cart[$productId]['gia_san_pham'],
    //     'ten_san_pham' => $cart[$productId]['ten_san_pham'],
    // ]);
        session()->put('cart',$cart);
        return redirect()->back();

    }
    public function UserEditCart(){

    }
}
