<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'title' => 'books',
            'metaTitle' => 'Piranha',
            'slug' => 'www.booksfi.org',
            'content' => Str::random()
        ]);

        Tag::create([
            'title' => 'aviation',
            'metaTitle' => 'Space',
            'slug' => 'www.nasa.gov',
            'content' => Str::random()
        ]);
    }
}
