<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_danh_muc'
    ];
    public $table = 'danh_mucs';

    public $timestamp = false;

    public function sanPhams(){
        return $this->hasMany(SanPham::class, 'danh_muc_id');
    }
}
