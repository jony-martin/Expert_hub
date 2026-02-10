<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'company_name'     => 'Demo Company Ltd.',
                'phone'            => '+880 1712-345678',
                'email'            => 'info@democompany.com',
                'address'          => 'House 12, Road 5, Dhanmondi, Dhaka 1209, Bangladesh',
                'tax_collection'   => 'enable',
                'tax_number'       => '987654321',
                'tax_type'         => 'inclusive',

                'logo'             => 'logo.png',
                'favicon'          => 'favicon.ico',

                'app_name'         => 'Nexora Admin Panel',
                'app_url'          => 'https://democompany.com',
                'app_locale'       => 'en',
                'timezone'         => 'Asia/Dhaka',
                'currency'         => 'bdt',
                'time_format'      => '12',

                'footer_text'      => 'Powering business growth through smart technology solutions.',
                'copyright_text'   => '© ' . date('Y') . ' Demo Company Ltd. All rights reserved.',

                'facebook'         => 'https://facebook.com',
                'youtube'          => 'https://youtube.com',
                'instagram'        => 'https://instagram.com',
                'twitter'          => 'https://twitter.com',
                'pinterest'        => 'https://pinterest.com',

                'created_at'       => now(),
            ]
        ]);
    }
}
