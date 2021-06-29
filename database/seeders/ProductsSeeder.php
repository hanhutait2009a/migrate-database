<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name' => 'Đồ chơi điện thoại Baby Phone Antona No.340',
                'price' => 72.000,

            ],
            [
                'name' => 'Đồ chơi bồn tắm Hà Mã Farlin DC-20041',
                'price' => 46.000,

            ],
            [
                'name' => 'Vòng ngậm mọc răng BF.14',
                'price' => 53.000,

            ],
            [
                'name' => 'Đồ chơi xếp hình 52 chi tiết Duka DK81020',
                'price' => 145.000,

            ],
            [
                'name' => 'Vui học Toán cùng thẻ đồ chơi Duka DK81015',
                'price' => 204.000,

            ],
            [
                'name' => 'Vui học Tiếng Việt cùng thẻ đồ chơi Duka DK81013',
                'price' =>225.000,

            ],
            [
                'name' => 'Đồ chơi trống âm nhạc thả hình Duka DK580022',
                'price' => 166.000,

            ],
            [
                'name' => 'Trống lục lạc Duka DK580021',
                'price' => 126.000,

            ],
            [
                'name' => 'Đồ chơi đàn mộc cầm có nhạc Duka DK580020',
                'price' => 107.000,

            ],
            [
                'name' => 'Đồ chơi đàn ghi ta có nhạc Duka DK580019',
                'price' => 90.000,

            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
