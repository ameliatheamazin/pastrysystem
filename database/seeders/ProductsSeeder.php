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
            'image_file' => 'Red-Velvet-Cupcakes-WS-Thumbnail-500x500.jpg',
         ]);

         DB::table('products')->insert([
            'id' => '2',
            'name' => 'Japanese Cheesecake',
            'price' => 50,
            'description' => 'Lightweight cake that leave you wanting more!',
            'image_file' => 'Japanese-Cheesecake-Thumnail-final-.jpg',
         ]);

         DB::table('products')->insert([
            'id' => '3',
            'name' => 'Butter Croissant (3 pcs)',
            'price' => 20,
            'description' => 'Your favorite Viennese, flaky and buttery pastry just got better',
            'image_file' => 'Butter Croissant (4 pcs).jpg',
         ]);

         DB::table('products')->insert([
            'id' => '4',
            'name' => 'Scone',
            'price' => 5,
            'description' => 'Irish raisin scones topped with strawberry jelly filling and buttercream',
            'image_file' => '1C5A5522.jpg',
         ]);

         DB::table('products')->insert([
            'id' => '5',
            'name' => 'Chocolate Cookies (10 pcs)',
            'price' => 20,
            'description' => 'The ultimate chocolate chip cookie loaded with 3 types of chocolate: White, Dark and Milk.',
            'image_file' => '087d17eb-500e-4b26-abd1-4f9ffa96a2c6.jpg',
         ]);
    }
}