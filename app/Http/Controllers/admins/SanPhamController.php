<?php

namespace App\Http\Controllers\Admins;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    // Sử dụng khi dùng Raw Query hoặc Query Builder
    public $san_pham;

    public function __construct()
    {
        $this->san_pham = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    // use Illuminate\Http\Request;
    public function index(Request $request)
    {
        // Sử dụng khi dùng Raw Query hoặc Query Builder
        // Lấy dữ liệu của sản phẩm
        // $listSanPham = $this->san_pham->getList();

        // Lấy dữ liệu từ form search
        $search = $request->input('search');
        $searchTrangThai = $request->input('searchTrangThai');

        // Sử dụng Eloquent
        $listSanPhams = SanPham::get();
        
        // query()
        //     ->when($search, function ($query, $search) {
        //         return $query->where('ma_san_pham', 'like', "%{$search}%")
        //                     ->orWhere('ten_san_pham', 'like', "%{$search}%");
        //     })
        //     ->when($searchTrangThai !== null, function ($query) use ($searchTrangThai) {
        //         return $query->where('trang_thai', '=', $searchTrangThai);
        //     })
        //     ->paginate(2);

        $title = "Danh sách sản phẩm";

        return view('admins.sanpham.index', compact('title', 'listSanPhams'));
    }

    public function create()
    {
        $title = "Thêm sản phẩm";
        $danh_mucs = DanhMuc::get();
        return view('admins.sanpham.create', compact('title','danh_mucs'));
    }

  
    public function store(Request $request)
    {
    
       
        if ($request->isMethod('POST')) {
       
     
            $params = $request->except('_token');
            if ($request->hasFile('anh_san_pham')) {
                $filename = $request->file('anh_san_pham')->store('uploads/sanpham', 'public');
            } else {
                $filename = null;
            }

            $params['anh_san_pham'] = $filename;

            // dd($params);
            SanPham::create($params);


            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phầm thành công!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $danhmuc=DanhMuc::get();
        $sanPham = Sanpham::findOrFail($id);
        
        return view('admins.sanpham.update', compact('sanPham','danhmuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');
            $sanPham = Sanpham::findOrFail($id);
          
      
            if ($request->hasFile('anh_san_pham')) {
                if ($sanPham->hinh_anh) {
                    Storage::disk('public')->delete($sanPham->hinh_anh);
                }
                $params['anh_san_pham'] = $request->file('anh_san_pham')->store('uploads/sanpham', 'public');
            } else {
                $params['anh_san_pham'] = $sanPham->hinh_anh;
            }

           
            
            $sanPham->update($params);

            return redirect()->route('sanpham.index')->with('success', 'Cập nhật sản phầm thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if ($request->isMethod('DELETE')) {
            
            $sanPham = SanPham::query()->findOrFail($id);

            $sanPham->delete();

            if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
                Storage::disk('public')->delete($sanPham->hinh_anh);
            }

            return redirect()->route('sanpham.index')->with('success', 'Xóa sản phầm thành công!');
        }

       
    }

    public function test()
    {
        dd("Đây là phương thức mới");
    }
}