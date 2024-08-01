<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giohang extends Model
{
    use HasFactory;
    protected $table = 'gio_hangs';
    protected $fillable = [
        'hinh_anh_san_pham',
        'gia_san_pham',
        'so_luong',
        'ten_san_pham'
    ];
}
