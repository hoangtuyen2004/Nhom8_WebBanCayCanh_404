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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();

            $table->string('ma_san_pham',10)->unique();
            $table->string('ten_san_pham',255);
            $table->string('anh_san_pham',255);
            $table->string('mo_ta_san_pham',555);
            $table->double('gia_san_pham');
            $table->string('ma_danh_mucs',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
