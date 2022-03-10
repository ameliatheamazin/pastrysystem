<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('orders')->insert([
            'id' => '1',
            'user_id' => 1,
            'total_price' => 55,
            'delivery_address' => '88, Jalan Maju, Taman Sentosa, 55000 Kuala Lumpur',
            'status' => 'delivered',
            'order_date' => Carbon::parse('2022-2-27')->format('Y-m-d'),

        ]);

        DB::table('orders')->insert([
            'id' => '2',
            'user_id' => 1,
            'total_price' => 90,
            'delivery_address' => 'No 21, Jalan Maju 9/123A, Subang U1, 40150 Selangor',
            'status' => 'ordered',
        ]);
    }
}