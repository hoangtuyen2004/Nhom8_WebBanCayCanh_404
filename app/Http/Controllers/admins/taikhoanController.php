<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class taikhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['taiKhoans'] = TaiKhoan::orderBy('id','DESC')->paginate(10);
        return view("admins.taikhoan.index",$data);
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['taiKhoan'] = TaiKhoan::query()->find($id);
        return view("admins.taikhoan.update",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if($request->isMethod('PUT')) {
            $params = $request->only('trang_thai');
            $taiKhoan = TaiKhoan::query()->find($id);
            $taiKhoan->update($params);
            return redirect()->route('admin-tai-khoans.index')->with('success','Sửa thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        if($request->isMethod('DELETE')) {
            $taiKhoan = TaiKhoan::query()->findOrFail($id);
            $taiKhoan->delete();
            return redirect()->route('admin-tai-khoans.index')->with('success','Xóa thành công!');
        }
    }
}
