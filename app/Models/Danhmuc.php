<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;

    public function getDanhMuc() {
        $danhMucs = DB::table("danh_mucs")->orderBy('id','DESC')->get();
        return $danhMucs;
    }

    protected $table = "danh_mucs";
    protected $fillable = [
        "ma_danh_muc",
        "ten_danh_muc",
    ];

    public function sanPhams(){
        return $this->hasMany(SanPham::class, 'danh_muc_id');
    }
}
