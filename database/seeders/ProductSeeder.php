<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Wireless Headphones',
                'status' => 1,
                'tag' => 'Electronics,Audio',
                'size' => 'One Size',
                'color' => '#000000,#FFFFFF',
                'description' => 'High-quality wireless headphones with noise cancellation.',
                'base_price' => 99.99,
                'discount_price' => 79.99,
                'image' => 'backend/images/products/1771302781_17.jpg,backend/images/products/1771302781_18.jpg,backend/images/products/1771302781_22.png',
                'stock' => 50,
                'sku' => 'WH-001',
                'slug' => 'wireless-headphones',
            ],
        ]);
    }
}
