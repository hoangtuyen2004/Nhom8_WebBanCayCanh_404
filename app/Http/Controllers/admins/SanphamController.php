<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Models\DanhMuc;
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
        $data['listSanphams'] = SanPham::query()->orderBy('id','desc')->get();
        return view('admins.sanpham.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $danh_mucs = DB::table('danh_mucs')->get();
        $data['danh_mucs'] = DanhMuc::query()->get();
        return view('admins.sanpham.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanPhamRequest $request)
    {
        if($request->isMethod('POST')) {
            $params = $request->validate([
                "ma_san_pham"=>"required|max:10",
                "ten_san_pham"=>"required|max:255",
                "so_luong"=>"required|integer",
                "gia_san_pham" => "required",
                "mo_ta_san_pham" => "required|max:255",
                "ma_danh_mucs" => "", 
            ]);
            $params['ngay_dang'] = date('Y-m-d');
            if($request->hasFile('anh_san_pham')) {
                $params['anh_san_pham'] = $request->file('anh_san_pham')->store('uploads/sanpham', 'public');
            }
            else{
                $params['anh_san_pham'] = null;
            }
            SanPham::query()->insert($params);
            return redirect()->route('sanpham.index')->with('success', 'Thêm mới thành công!');
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
        $sanPham = SanPham::query()->find($id);
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
        $sanPham = SanPham::query()->findOrFail($id);
        // Xóa hình ảnh của sản phẩm 
        if ($sanPham->hinh_anh) {
            Storage::disk('public')->delete($sanPham->hinh_anh);
        }
        // xóa sản phẩm trong db 
        $sanPham->delete();
        return redirect()->route('sanpham.index')->with('success', 'Xóa thành công!');
    }
}
