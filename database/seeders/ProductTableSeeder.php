<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name'=>'마리오카트', 'price'=>55000, 'stock'=>100]);
        Product::create(['name'=>'젤다의전설', 'price'=>75000, 'stock'=>200]);
        Product::create(['name'=>'포켓몬스터', 'price'=>65000, 'stock'=>150]);
        Product::create(['name'=>'몬스터헌터', 'price'=>45000, 'stock'=>300]);
    }
}
