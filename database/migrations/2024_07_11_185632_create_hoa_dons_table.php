<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_dons',10)->unique();
            $table->string('ma_tai_khoans',10);
            $table->string('ten_nguoi_nhan',255);
            $table->string('dia_chi',50);
            $table->string('email',255);
            $table->string('so_dien_thoai',10);
            $table->double('tong_tien');
            $table->date('ngay_tao');
            $table->integer('trang_thai');
            $table->string('hinh_thuc_thanh_toan',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
