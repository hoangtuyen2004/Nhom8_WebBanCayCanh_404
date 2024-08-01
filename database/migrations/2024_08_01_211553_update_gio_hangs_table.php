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
        Schema::table('gio_hangs', function (Blueprint $table) {
           $table->renameColumn('ma_khach_hangs','gia_san_pham');
           $table->renameColumn('ma_gio_hangs','hinh_anh_san_pham');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gio_hangs', function (Blueprint $table) {
            $table->renameColumn('gia_san_pham','ma_khach_hangs');
           $table->renameColumn('hinh_anh_san_pham','ma_gio_hangs');
        });
    }
};
