<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Amelia',
            'email' => 'ame@gmail.com',
            'password' => 1234,
            'address' => '88, Jalan Maju, Taman Sentosa, 55000 Kuala Lumpur',
         ]);

         DB::table('users')->insert([
            'id' => '2',
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => 1234,
            'address' => '',
         ]);
    }
}