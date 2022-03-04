<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products_OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('products_orders')->insert([
            'product_id' => '1',
            'order_id' => 1,
            'quantity' => 1,
        ]);

        DB::table('products_orders')->insert([
            'product_id' => '3',
            'order_id' => 1,
            'quantity' => 2,
        ]);

        DB::table('products_orders')->insert([
            'product_id' => '2',
            'order_id' => 2,
            'quantity' => 1,
        ]);

        DB::table('products_orders')->insert([
            'product_id' => '3',
            'order_id' => 2,
            'quantity' => 1,
        ]);

        DB::table('products_orders')->insert([
            'product_id' => '5',
            'order_id' => 2,
            'quantity' => 1,
        ]);

    }
}