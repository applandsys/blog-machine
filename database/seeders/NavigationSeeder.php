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
                'name'=>'Home',
                'slug'=>'home',
                'link_type' => 'category',
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


$table->integer('parent_id')->nullable();
$table->integer('link_id');
$table->string('name');
$table->enum('link_type', ['page', 'post','category','external'])->default('page');
$table->string('external_link')->nullable();
$table->string('position');       $table->integer('parent_id')->nullable();
$table->integer('link_id');
$table->string('name');
$table->enum('link_type', ['page', 'post','category','external'])->default('page');
$table->string('external_link')->nullable();
$table->string('position');
