<?php

namespace Database\Seeders;

use App\Models\PostTag;
use Illuminate\Database\Seeder;

class PostTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostTag::create([
           'post_id' => 1,
           'tag_id' => 2
        ]);

        PostTag::create([
            'post_id' => 1,
            'tag_id' => 1
        ]);
    }
}
