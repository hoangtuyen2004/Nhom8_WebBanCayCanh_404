<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    public $san_phams;

    public function __construct()
    {
        $this->san_phams = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSanPham = $this->san_phams->getAll();
        // dd($listSanPham);

        // Gọi đến view muốn hiển thị ra
        return view('admins.sanpham.index', ['san_phams' => $listSanPham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // lấy danh mục sản phẩm
        // Sử dụng query builder
        $danh_mucs = DB::table('danh_mucs')->get();

        // Hiển ra view add
        return view('admin.sanpham.add', ['danh_mucs' => $danh_mucs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lý ảnh
        if ($request->hasFile('hinh_anh')) {
            // Nếu có đẩy hình ảnh
            $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        } else {
            $filename = null;
        }

        $dataInsert = [
            'hinh_anh' => $filename,
            'ten_san_pham' => $request->ten_san_pham,
            'so_luong' => $request->so_luong,
            'gia' => $request->gia,
            'ngay_nhap' => $request->ngay_nhap,
            'mo_ta' => $request->mo_ta,
            'danh_muc_id' => $request->danh_muc_id,
        ];

        // dd($dataInsert);

        $this->san_phams->createSanPham($dataInsert);

        return redirect()->route('sanpham.index');
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
        // form sửa sản phẩm
        // Lấy sản phẩm theo id 
        $sanPham = $this->san_phams->find($id);
        $danh_mucs = DB::table('danh_mucs')->get();
        if (!$sanPham) {
            return redirect()->route('sanpham.index');
        }
        return view('admin.sanpham.update', compact('sanPham', 'danh_mucs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        // Lấy lại thông tin sản phẩm
        $sanPham = $this->san_phams->find($id);

        if ($request->hasFile('hinh_anh')) {
            // Nếu có ảnh cũ thì xóa đi 
            if ($sanPham->hinh_anh) {
                Storage::disk('public')->delete($sanPham->hinh_anh);
            }

            // lưu ảnh mới 
            $fileName = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        }else{
            $fileName = $sanPham->hinh_anh;
        }

        $dataUpdate = [
            'hinh_anh' => $fileName,
            'ten_san_pham' => $request->ten_san_pham,
            'so_luong' => $request->so_luong,
            'gia' => $request->gia,
            'ngay_nhap' => $request->ngay_nhap,
            'mo_ta' => $request->mo_ta,
            'danh_muc_id' => $request->danh_muc_id,
        ];

        $sanPham->updateSanPham($dataUpdate, $id);
        
        return redirect()->route('sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xử lý xóa sản phẩm
        // Tìm sản phẩm  
        $sanPham = $this->san_phams->find($id);

        if (!$sanPham) {
            return redirect()->route('sanpham.index');
        }
        // Xóa hình ảnh của sản phẩm 
        if ($sanPham->hinh_anh) {
            Storage::disk('public')->delete($sanPham->hinh_anh);
        }
        // xóa sản phẩm trong db 
        $sanPham->delete();

        return redirect()->route('sanpham.index');
    }
}
