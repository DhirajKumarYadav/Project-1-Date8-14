<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([[
            'name'=>'laptop',
            'mrp'=>'40000',
            'price'=>'33000',
            'category'=>'dell laptop',
            'description'=>'dell newly launched laptop',
            'image'=>'20170710_152824.jpg'],

            [ 'name'=>'charger',
            'mrp'=>'500',
            'price'=>'480',
            'category'=>'charger samsung',
            'description'=>'superfast charger',
            'image'=>'15827_HP-G-FJ-090105.jpg'],

            [ 'name'=>'LG mobiles',
            'mrp'=>'54000',
            'price'=>'53000',
            'category'=>'LG mobiles',
            'description'=>'LG branded mobile phones',
            'image'=>'14886_XL-G-FJ-16082553.jpg'],

            [ 'name'=>'Refigeraters',
            'mrp'=>'66000',
            'price'=>'65000',
            'category'=>'Refigeraters',
            'description'=>'Large space with higher facility',
            'image'=>'14594_QL-G-FJ-00812.jpg'],

            [ 'name'=>'Headphones',
            'mrp'=>'5000',
            'price'=>'4500',
            'category'=>'Realme Headphones',
            'description'=>'Headphpone with high battery backup',
            'image'=>'13503_CG-G-FJ-175.jpg']


        ]);
    }
}
