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
                'name' => "Tarique Mosharraf",
                'email' => 'admin@admin.com',
                'role'=>'admin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Mahreen Monni",
                'email' => 'user@user.com',
                'role'=>'user',
                'password' => Hash::make('12345678'),
            ]
        ]);

    }
}
