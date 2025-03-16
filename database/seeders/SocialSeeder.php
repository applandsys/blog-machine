<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_links')->insert(
            [
                [
                    'icon' => '<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>',
                    'link' => 'https://www.twitter.com/',
                ],
                [
                    'icon' => '<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>',
                    'link' => 'https://www.twitter.com/',
                ],
                [
                    'icon' => '<i class="fab fa-youtube fa-stack-1x fa-inverse"></i>',
                    'link' => 'https://www.twitter.com/',
                ],

            ]
        );
    }
}
