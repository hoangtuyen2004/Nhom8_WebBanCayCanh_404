<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadonchitiet extends Model
{
    use HasFactory;
    protected $table = "hoa_don_chi_tiets";
    protected $fillable = [
        'ma_hoa_don_chi_tiets',
        'ma_hoa_dons',
        'ma_san_phams',
        'so_luong',
        'gia'
    ];
}
