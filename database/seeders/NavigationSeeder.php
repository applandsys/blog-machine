<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navigation_items')->insert([
            [
                'parent_id' => null,
                'link_id' => 1,
                'name'=>'Movie',
                'slug'=>'movie',
                'link_type' => 'category',
                'external_link' => null,
                'position' => 'main',
            ],
            [
                'parent_id' => null,
                'link_id' => 1,
                'name'=>'Home',
                'slug'=>'home',
                'link_type' => 'page',
                'external_link' => null,
                'position' => 'main',
            ]
        ]);
    }
}



