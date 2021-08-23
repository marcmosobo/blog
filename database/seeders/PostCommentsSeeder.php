<?php

namespace Database\Seeders;

use App\Models\PostComment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostComment::create([
            'post_id' => 1,
            'parent_id' => 1,
            'title' => 'Taxes on the super rich',
            'published' => 1,
            'published_at' => now(),
            'content' => Str::random()
        ]);
    }
}
