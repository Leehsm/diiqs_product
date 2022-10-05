<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_detail')->insert([
            'name'=>'Serum',
            'ingredients'=>'Skincare',
            'description'=>'abcdefghijklmnopqrstuvwxyz',
            'volume'=>'100',
            'price'=>'99',
            'image'=>'upload/154765718_1787837898045742_1338652978407389049_n.jpg',
        ]);
    }
}
