<?php

namespace Database\Seeders;

use App\Models\PostMeta;
use Illuminate\Database\Seeder;

class PostMetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostMeta::create([
            'post_id' => 1,
            'key' => 'P001',
            'content' => 'This where the content goes..'
        ]);
    }
}
