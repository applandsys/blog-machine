<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('posts')->insert([
            [
                'title' => "Demo Post Title One",
                'slug' => 'demo-post-one',
                'excerpt' =>  $faker->paragraph(5),
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
                'title' => "Demo Post Title Two",
                'slug' => 'demo-post-two',
                'excerpt' =>  $faker->paragraph(5),
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

