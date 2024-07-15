<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;

    private $table = 'danh_mucs';

    private $fillable =[
        'ma_danh_muc',
        'ten_danh_muc'
    ];
}
