<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'phone' => '0123456789',
                'address' => 'Dhaka',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
            ],
            [
                'name' => 'Jony',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'phone' => '0123456889',
                'address' => 'Dhaka',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
            ],
        ]);
    }
}
