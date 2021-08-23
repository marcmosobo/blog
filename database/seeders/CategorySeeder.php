<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
           'parent_id' => 1,
           'title' => 'Weather',
           'metaTitle' => 'Meteorological Dept',
            'slug' => 'www.metldept.com',
            'content' => 'Content goes here...'
        ]);
    }
}
