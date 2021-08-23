<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call([
       UserSeeder::class,
       PostSeeder::class,
       PostMetasSeeder::class,
       PostCommentsSeeder::class,
       CategorySeeder::class,
       PostCategoriesSeeder::class,
       TagSeeder::class,
       PostTagsSeeder::class
    ]);
    }
}
