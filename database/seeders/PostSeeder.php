<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('email','mmosobo@gmail.com')->first();
        $user2 = User::where('email','hannahmontana@yahoo.com')->first();
        Post::create([
            'author_id' => $user1->id,
            'parent_id' => 1,
            'title' => 'Effects of Marijuana abuse and HIV/Aids prevalence in Kakamega',
            'metaTitle' => 'Marijuana and HIV/Aids - Kakamega',
            'slug' => 'https://www.tijuanachronicles.com/articles',
            'summary' => 'This is an excerpt from a conversation with a reformed marijuana addict who
                          was also a full-time commercial sex worker within Kakamega town, Kenya.',
            'published' =>1,
            'publishedAt' => now(),
            'content' => 'The confessions are raw and explicit as we head down with Stacy* (not her real name)
                          to an undisclosed location to get on with our interview. She looks relaxed and chilled
                          as opposed to the stereotype given to most women in this line of work. She is not shy to start
                          with an opening statement confirming her HIV-positive status; which she claims is something she
                          has learnt eventually to overcome and see the light at the end of the tunnel still...'

        ]);

        Post::create([
            'author_id' => $user2->id,
            'parent_id' => 1,
            'title' => 'Bill to Offer Opportunities to KQ',
            'metaTitle' => 'What is in the current bill to aviation community?',
            'slug' => 'https://www.parliament.gov/articles',
            'summary' => 'A preview of parliamentary intervention to boost foreign trade',
            'published' =>1,
            'publishedAt' => now(),
            'content' => Str::random()

        ]);
    }
}
