<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('item')->insert([
            'name' => 'producto1',
            'price' => 23.01,
            'stock' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('item')->insert([
            'name' => 'producto2',
            'price' => 21.02,
            'stock' => 3,
        ]);

        \Illuminate\Support\Facades\DB::table('item')->insert([
            'name' => 'producto3',
            'price' => 12,
            'stock' => 1,
        ]);
    }
}
