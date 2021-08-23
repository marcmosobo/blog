<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => $this->faker->word,
        'parent_id' => $this->faker->word,
        'title' => $this->faker->word,
        'metaTitle' => $this->faker->word,
        'slug' => $this->faker->word,
        'summary' => $this->faker->text,
        'published' => $this->faker->word,
        'publishedAt' => $this->faker->date('Y-m-d H:i:s'),
        'content' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
