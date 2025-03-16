<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert(
            [
                'site_name' => "My Dream Blog",
                'site_logo' => 'logo.png',
                'site_favicon'=>'favicon.png',
                'site_email'=>'phenxlab@gmail.com',
                'site_phone' => '+8801837664478',
                'site_address' => 'Uttara, Dhaka 1230',
            ]
        );
    }
}


