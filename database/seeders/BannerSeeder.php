<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                'id' => 1,
                'title' => 'New Fashion Collection',
                'sub_title' => 'Sell Offer',
                'button_name' => 'Order Now',
                'button_url' => 'https://example.com/order-now',
                'description' => '<p>Get the latest fashion trends and exclusive offers. Visit our website for more details.</p>',
                'image' => '1771213311_2787.jpg',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Best Smart Watch Ever',
                'sub_title' => 'Buy Now',
                'button_name' => 'Buy Now',
                'button_url' => 'https://example.com/buy-now',
                'description' => '<p>Get the latest fashion trends and exclusive offers. Visit our website for more details.</p>',
                'image' => '1771221303_9699.jpg',
                'status' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
