<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'number_phone' => '081234567890',
                'password' => Hash::make('Admin123'),
                'role' => 'Admin',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Radit',
                'email' => 'radit@gmail.com',
                'number_phone' => '082345678901',
                'password' => Hash::make('radit123'),
                'role' => 'Penjual',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Noval',
                'email' => 'noval@gmail.com',
                'number_phone' => '083456789012',
                'password' => Hash::make('noval123'),
                'role' => 'Penjual',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Raja',
                'email' => 'raja@gmail.com',
                'number_phone' => '084567890123',
                'password' => Hash::make('raja123'),
                'role' => 'Penjual',
                'created_at' => now(),
            ],
        ]);
    }
}