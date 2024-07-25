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
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang',10)->unique();
            $table->string('ten_khach_hang',255);
            $table->string('email',255);
            $table->string('mat_khau',255);
            $table->string('so_dien_thoai',10);
            $table->string('dia_chi',50);
            $table->string('vai_tro',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
