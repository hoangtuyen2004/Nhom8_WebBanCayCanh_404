<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Hoadon;
use App\Models\hoadonchitiet;
use App\Models\SanPham;
use App\Models\TaiKhoan;
use App\Models\User;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['donHangs'] = Hoadon::orderBy('id','desc')->paginate(10);
        // dd($data['donHangs']);
        $data['users'] = User::query()->get();
        return view("admins.donhang.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['donHang'] = Hoadon::findOrFail($id);
        $data['donHangChiTiets'] = hoadonchitiet::query()->where('ma_hoa_dons', $data['donHang']['id'])->get();
        $data['sanPhams'] = SanPham::query()->get();
        $data['taiKhoan'] = User::query()->find( $data['donHang']['ma_tai_khoans'] );
        return view("admins.donhang.detail", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->all());
        $search = $request->input('search');
        $hoaDon = Hoadon::query()->when($search, function($query,$search) {return $query->where('ma_hoa_dons', 'like', "%{$search}%");})->find($id);
        if($request->isMethod('PUT')) {
            if($request->xac_nhan) {
                $hoaDon->update(['trang_thai'=>2]);
            }
            elseif($request->huy) {
                $hoaDon->update(['trang_thai'=>5]);
            }
            elseif($request->dang_giao) {
                $hoaDon->update(['trang_thai'=>3]);
            }
            elseif($request->da_giao) {
                $hoaDon->update(['trang_thai'=>4]);
            }
        }
        return redirect()->route('admin-don-hang.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        if($request->isMethod('DELETE')) {
            $hoaDon = Hoadon::query()->findOrFail($id);
            $hoaDon->delete();
            $hoDonChiTiets = hoadonchitiet::query()->where('ma_hoa_dons',$hoaDon->id)->get();
            foreach ($hoDonChiTiets as $hoDonChiTiet) {
                $hoDonChiTiet->delete();
            }
            return redirect()->route('admin-don-hang.index')->with('success','Xóa thành công!');
        }
    }
}
