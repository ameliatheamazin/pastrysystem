<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => '1',
            'name' => 'Red Velvet Cupcake (3 pcs)',
            'price' => 15,
            'description' => 'Creamy and perfect for a snack!',
            'image_file' => 'https://tinyurl.com/m9hzdww5',
         ]);

         DB::table('products')->insert([
            'id' => '2',
            'name' => 'Japanese Cheesecake',
            'price' => 50,
            'description' => 'Lightweight cake that leave you wanting more!',
            'image_file' => 'https://tinyurl.com/473kea54',
         ]);

         DB::table('products')->insert([
            'id' => '3',
            'name' => 'Butter Croissant (3 pcs)',
            'price' => 20,
            'description' => 'Your favorite Viennese, flaky and buttery pastry just got better',
            'image_file' => 'https://tinyurl.com/2s3j4kzx',
         ]);

         DB::table('products')->insert([
            'id' => '4',
            'name' => 'Scone',
            'price' => 5,
            'description' => 'Irish raisin scones topped with strawberry jelly filling and buttercream',
            'image_file' => 'https://tinyurl.com/999w89pb',
         ]);

         DB::table('products')->insert([
            'id' => '5',
            'name' => 'Chocolate Cookies (10 pcs)',
            'price' => 20,
            'description' => 'The ultimate chocolate chip cookie loaded with 3 types of chocolate: White, Dark and Milk.',
            'image_file' => 'https://tinyurl.com/4rctkdr7',
         ]);
    }
}