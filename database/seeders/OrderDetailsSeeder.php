<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderDetailsSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'orderId' => 1,
                'productsId' => 1,
                'quantity'=>'don1',
                'amount'=>72.000,

            ],
            [
                'orderId' => 1,
                'productsId' => 2,
                'quantity'=>'don2',
                'amount'=>46.000,

            ],
            [
                'orderId' => 1,
                'productsId' => 3,
                'quantity'=>'don3',
                'amount'=>53.000,

            ],
            [
                'orderId' => 1,
                'productsId' => 4,
                'quantity'=>'don4',
                'amount'=>145.000,

            ],
            [
                'orderId' => 1,
                'productsId' => 5,
                'quantity'=>'don5',
                'amount'=>204.000,

            ],
            [
                'orderId' => 2,
                'productsId' => 6,
                'quantity'=>'don6',
                'amount'=>225.000,

            ],
            [
                'orderId' => 2,
                'productsId' => 7,
                'quantity'=>'don7',
                'amount'=>166.000,

            ],
            [
                'orderId' => 2,
                'productsId' => 8,
                'quantity'=>'don8',
                'amount'=>126.000,

            ],
            [
                'orderId' => 2,
                'productsId' => 9,
                'quantity'=>'don9',
                'amount'=>107.000,

            ],
            [
                'orderId' => 2,
                'productsId' => 10,
                'quantity'=>'don10',
                'amount'=>90.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 1,
                'quantity'=>'don11',
                'amount'=>72.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 2,
                'quantity'=>'don12',
                'amount'=>46.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 3,
                'quantity'=>'don13',
                'amount'=>53.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 4,
                'quantity'=>'don14',
                'amount'=>145.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 5,
                'quantity'=>'don15',
                'amount'=>204.000,

            ],
            [
                'orderId' => 3,
                'productsId' => 6,
                'quantity'=>'don16',
                'amount'=>225.000,

            ],
            [
                'orderId' => 4,
                'productsId' => 1,
                'quantity'=>'don17',
                'amount'=>72.000,

            ],
            [
                'orderId' => 4,
                'productsId' => 2,
                'quantity'=>'don18',
                'amount'=>46.000,

            ],
            [
                'orderId' => 4,
                'productsId' => 3,
                'quantity'=>'don19',
                'amount'=>53.000,

            ],
            [
                'orderId' => 4,
                'productsId' => 4,
                'quantity'=>'don20',
                'amount'=>145.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 1,
                'quantity'=>'don21',
                'amount'=>72.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 2,
                'quantity'=>'don22',
                'amount'=>46.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 3,
                'quantity'=>'don23',
                'amount'=>53.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 4,
                'quantity'=>'don24',
                'amount'=>145.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 5,
                'quantity'=>'don25',
                'amount'=>204.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 6,
                'quantity'=>'don26',
                'amount'=>225.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 7,
                'quantity'=>'don27',
                'amount'=>166.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 8,
                'quantity'=>'don28',
                'amount'=>126.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 9,
                'quantity'=>'don29',
                'amount'=>107.000,

            ],
            [
                'orderId' => 5,
                'productsId' => 10,
                'quantity'=>'don30',
                'amount'=>90.000,

            ],


        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
