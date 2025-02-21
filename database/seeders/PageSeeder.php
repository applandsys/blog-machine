<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('pages')->insert([
            [
                'title' => "Demo Page Title One",
                'slug' => 'demo-post-one',
                'excerpt' =>  $faker->paragraph(10),
                'content'=>$faker->paragraph(20),
                'meta_tags' => json_encode(['test','demo']),
                'meta_description' => 'Meta Description',
                'status' => 'published',
                'discussion' => 'open',
                'revision' => 0,
                'user_id' => 2,
                'format' => 'standard'
            ],
            [
                'title' => "Demo Page Title Two",
                'slug' => 'demo-post-two',
                'excerpt' =>  $faker->paragraph(10),
                'content'=>$faker->paragraph(20),
                'meta_tags' => json_encode(['test','demo']),
                'meta_description' => 'Meta Description',
                'status' => 'published',
                'discussion' => 'open',
                'revision' => 0,
                'user_id' => 2,
                'format' => 'standard'
            ]
        ]);
    }
}
