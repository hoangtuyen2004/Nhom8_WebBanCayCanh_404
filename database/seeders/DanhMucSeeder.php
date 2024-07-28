<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("danh_mucs")->insert([
            [
                "ma_danh_muc" => "DM01",
                "ten_danh_muc" => "Cây trong nhà",
            ],
            [
                "ma_danh_muc" => "DM02",
                "ten_danh_muc" => "Cây mini",
            ],
            [
                "ma_danh_muc" => "DM03",
                "ten_danh_muc" => "Tiểu cảnh",
            ]
        ]);
    }
}
