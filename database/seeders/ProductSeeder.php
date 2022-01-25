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
        //
        DB::table('products')->insert(
            [
            'name'=>'nokia',
            'price'=>'1500',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorum eaque voluptatum, libero fugit ad facilis perspiciatis alias ',
            'category'=>'mobile',
            'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Nokia_3310_Blue_R7309170_%28retouch%29.png/225px-Nokia_3310_Blue_R7309170_%28retouch%29.png',
            ],
     );
    }
}
