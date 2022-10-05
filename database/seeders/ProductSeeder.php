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
            'name'=>'Diiqs Beauty Serum',
            'price'=>'99',
            'category'=>'Skincare',
            'description'=>'abcdefghijklmnopqrstuvwxyz',
            'quantity'=>'100',
            'gallery'=>'upload/154765718_1787837898045742_1338652978407389049_n.jpg',
        ]);
    }
}
