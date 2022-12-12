<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Samsung Galaxy A52',
            'year' => 2021,
            'description' => 'The Samsung Galaxy A52 comes with 6.5-inch AMOLED 
            display with 90Hz refresh rate an Qualcomm Snapdragon 720G  ',
            'price' => 5000000,
            'qty' => 1,
            'image' => 'samsungA52.png',
        ]);
        
        DB::table('products')->insert([
            'title' => 'Dark Souls',
            'year' => 2011,
            'description' => 'In the Age of An',
            'price' => 1,
            'qty' => 1,
            'image' => 'wingsofshadow.jpeg',
        ]);

        DB::table('products')->insert([
            'title' => 'Dark Souls',
            'year' => 2011,
            'description' => 'In the Age of Anc',
            'price' => 1,
            'qty' => 1,
            'image' => 'harry.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'Dark Souls',
            'year' => 2011,
            'description' => 'In the Age of A',
            'price' => 1,
            'qty' => 1,
            'image' => 'dragonheir.jpeg',
        ]);

        DB::table('products')->insert([
            'title' => 'Dark Souls',
            'year' => 2011,
            'description' => 'In the',
            'price' => 1,
            'qty' => 1,
            'image' => 'fireblood.jpg',
        ]);
    }
}
