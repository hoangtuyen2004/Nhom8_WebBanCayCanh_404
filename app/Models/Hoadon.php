<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $table = "hoa_dons";
    protected $fillable = [
        'ma_hoa_dons',
        'ma_tai_khoans',
        'ten_nguoi_nhan',
        'dia_chi',
        'email',
        'so_dien_thoai',
        'tong_tien',
        'ngay_tao',
        'trang_thai',
        'hinh_thuc_thanh_toan',
    ];
}
