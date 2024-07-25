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
        Schema::create('hoa_don_chi_tiets', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don_chi_tiets',10)->unique();
            $table->string('ma_hoa_dons',10);
            $table->string('ma_san_phams',10);
            $table->integer('so_luong');
            $table->float('gia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_don_chi_tiets');
    }
};
