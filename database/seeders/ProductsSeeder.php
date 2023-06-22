<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
          ['prod_name'=>'Shirt', 'category_id'=>1, 'descr'=>'asdsd', 'size'=>1, 'condition'=>1],
            ['prod_name'=>'qweq', 'category_id'=>1, 'descr'=>'qaszcx', 'size'=>2, 'condition'=>1],
        ];
        foreach($products as $product)
            DB::table('products')->insert($product);
    }
}
