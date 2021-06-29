<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'name' => 'Tai',
                'address' => 'bacninh',

            ],
            [
                'name' => 'Phuc',
                'address' => 'bacninh',

            ],
            [
                'name' => 'Chinh',
                'address' => 'bacninh',

            ],
            [
                'name' => 'Thom',
                'address' => 'bacninh',

            ],
            [
                'name' => 'Huy',
                'address' => 'bacninh',

            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
