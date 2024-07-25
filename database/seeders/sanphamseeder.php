<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sanphamseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams') ->insert(
            [
                [
                     "ma_san_pham"=>"mk1",
                     "ten_san_pham"=>"cây tài lộc ",
                     "anh_san_pham" => "slsl",
                     "mo_ta_san_pham" => "hay chất lượng",
                     "gia_san_pham" => 20000,
                     "ma_danh_mucs" =>"",    

                ],
                [
                    "ma_san_pham"=>"mk2",
                    "ten_san_pham"=>"cây phất dụ ",
                    "anh_san_pham" => "slsl",
                    "mo_ta_san_pham" => "hay chất lượng",
                    "gia_san_pham" => 20000,
                    "ma_danh_mucs" =>"",    

               ],
                 [
                     "ma_san_pham"=>"mk3",
                     "ten_san_pham"=>" cây ngọc bích ",
                     "anh_san_pham" => "slsl",
                     "mo_ta_san_pham" => "hay chất lượng",
                     "gia_san_pham" => 20000,
                     "ma_danh_mucs" =>"",    

                ],
                [
                    "ma_san_pham"=>"mk4",
                    "ten_san_pham"=>"cây phong lộc hoa ",
                    "anh_san_pham" => "slsl",
                    "mo_ta_san_pham" => "hay chất lượng",
                    "gia_san_pham" => 20000,
                    "ma_danh_mucs" =>"",    

               ],
               [
                "ma_san_pham"=>"mk5",
                "ten_san_pham"=>" cây lưỡi hổ ",
                "anh_san_pham" => "slsl",
                "mo_ta_san_pham" => "hay chất lượng",
                "gia_san_pham" => 20000,
                "ma_danh_mucs" =>"",    

           ]

            ]
               );
    }
}
