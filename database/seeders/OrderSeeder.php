<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'customerId' =>1,

            ],
            [
                'customerId' =>2,

            ],
            [
                'customerId' =>3,

            ],
            [
                'customerId' =>4,

            ],
            [
                'customerId' =>5,

            ],
            [
                'customerId' =>1,

            ],
            [
                'customerId' =>2,

            ],
            [
                'customerId' =>3,

            ],
            [
                'customerId' =>4,

            ],
            [
                'customerId' =>5,

            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
