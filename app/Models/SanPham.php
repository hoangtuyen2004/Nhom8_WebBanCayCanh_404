<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'anh_san_pham',
        'so_luong',
        'mo_ta_san_pham',
        'gia_san_pham',
        'ngay_dang',
        'ma_danh_mucs'
    ];
    protected $table = 'san_phams';

    public $timestamp = false;

    public function danhMuc(){
        return $this->belongsTo(DanhMuc::class, 'ma_danh_mucs');
    }
    // Cách 1: Sử Query Builer
    public function getAll()
    {
        $san_phams = DB::table('san_phams')
            ->join('danh_mucs', 'san_phams.ma_danh_mucs', '=', 'danh_mucs.id')
            ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
            ->orderBy('san_phams.id', 'DESC')
            ->get();

        return $san_phams;
    }


    // // Xử lý thêm sản phẩm
    public function createSanPham($data)
    {
        DB::table('san_phams')->insert(
            [
                'hinh_anh' =>$data['hinh_anh'],
                'ten_san_pham' => $data['ten_san_pham'],
                'so_luong' => $data['so_luong'],
                'gia' => $data['gia'],
                'ngay_nhap' => $data['ngay_nhap'],
                'mo_ta' => $data['mo_ta'],
                'danh_muc_id' => $data['danh_muc_id'],
            ]
        );
        DB::table('san_phams')->insert($data);

    }

    public function updateSanPham($data, $id)
    {
        DB::table('san_phams')
        ->where('id', $id)
        ->update($data);
    }
}
