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
        //
        Schema::table('san_phams', function (Blueprint $table) {
            $table->integer('so_luong')->nullable()->after('anh_san_pham');
            $table->date('ngay_dang')->nullable()->after('gia_san_pham');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('san_phams', function (Blueprint $table) {
            $table->dropColumn('so_luong');
            $table->dropColumn('ngay_dang');
        });
    }
};
