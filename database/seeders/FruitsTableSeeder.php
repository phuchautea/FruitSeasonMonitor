<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = [
            ['Bơ', 4, 9],
            ['Chuối', 1, 12],
            ['Sơri', 1, 12],
            ['Khế', 1, 12],
            ['Thanh long', 1, 12],
            ['Sầu riêng', 1, 12],
            ['Nho', 1, 12],
            ['Ổi', 1, 12],
            ['Mít', 3, 9],
            ['Táo', 5, 12],
            ['Bòn bon', 7, 10],
            ['Chanh', 1, 12],
            ['Nhãn', 1, 12],
            ['Vải', 5, 7],
            ['Xoài', 10, 7],
            ['Măng cụt', 5, 9],
            ['Cam', 9, 3],
            ['Cóc', 8, 12],
            ['Đu đủ', 1, 12],
            ['Đào', 5, 7],
            ['Lê', 5, 8],
            ['Hồng', 8, 11],
            ['Dứa (thơm, khóm)', 1, 12],
            ['Mận', 5, 8],
            ['Bưởi', 8, 2],
            ['Dâu da', 7, 10],
            ['Chôm chôm', 5, 9],
            ['Sa pô chê (Hồng xiêm)', 1, 12],
            ['Mãng cầu', 1, 12],
            ['Vú sữa', 10, 12],
            ['Mãng cầu dai (Na)', 1, 12],
            ['Quýt', 9, 3],
            ['Dưa hấu', 1, 12],
            ['Mận (Gioi)', 1, 12],
            ['Dừa', 1, 12],
        ];

        foreach ($fruits as $fruit) {
            DB::table('fruits')->insert([
                'name' => $fruit[0],
                'slug' => Str::slug($fruit[0], '-'),
                'month_start' => $fruit[1],
                'month_end' => $fruit[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
