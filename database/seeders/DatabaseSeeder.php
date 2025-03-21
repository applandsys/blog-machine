<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call([
            UserSeeder::class,
            NavigationSeeder::class,
            PageSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
            SiteSettingSeeder::class,
            SocialSeeder::class
        ]);
    }
}
