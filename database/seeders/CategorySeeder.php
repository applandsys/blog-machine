<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'parent_id'=>0,
                'name'=>'Test Cat',
                'slug'=>'test-cat',
                'description'=>'Its a test cat',
                'image_link'=>null,
                'status'=>'published',
            ],
            [
                'parent_id'=>0,
                'name'=>'Test Cat 2',
                'slug'=>'test-cat-2',
                'description'=>'Its a test cat Two',
                'image_link'=>null,
                'status'=>'published',
            ]
        ]);
    }
}
