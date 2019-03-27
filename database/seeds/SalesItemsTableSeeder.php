<?php

use Illuminate\Database\Seeder;

class SalesItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('sale_item')->insert([
            'sale_id' => 1,
            'item_id' => 1,
        ]);

        \Illuminate\Support\Facades\DB::table('sale_item')->insert([
            'sale_id' => 1,
            'item_id' => 2,
        ]);

        \Illuminate\Support\Facades\DB::table('sale_item')->insert([
            'sale_id' => 1,
            'item_id' => 3,
        ]);
    }
}
