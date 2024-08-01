<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $danhmucs;
    public function __construct() {
        $this->danhmucs = new DanhMuc();
    }
    public function index()
    {   
        $data['danhmucs'] = DanhMuc::query()->paginate(5);
        return view("admins.danhmuc.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("admins.danhmuc.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DanhMucRequest $request)
    {
        if ($request->isMethod("POST")) 
        {
            // dd($request->all());
            $params = $request->except('_token');
            // dd($params);
            DanhMuc::create($params);
            return redirect()->route('danhmuc.index')->with('success','Thêm mới thành công');
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
        //
        $data['danhmuc'] = DanhMuc::query()->find($id);
        return view("admins.danhmuc.update", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {
            # code...
            $params = $request->only("ma_danh_muc", "ten_danh_muc");
            $danhmuc = DanhMuc::query()->find($id);
            $danhmuc->update($params);
            return redirect()->route("danhmuc.index")->with("success","Chỉnh sửa thành công");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        if($request->isMethod('DELETE')) {
            $danhMuc = DanhMuc::query()->findOr($id);
            $danhMuc->delete();
            return redirect()->route('danhmuc.index')->with('success','Xóa thành công');
        }
    }
}