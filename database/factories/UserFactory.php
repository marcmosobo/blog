<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->word,
        'middleName' => $this->faker->word,
        'lastName' => $this->faker->word,
        'mobile' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'lastLogin' => $this->faker->date('Y-m-d H:i:s'),
        'intro' => $this->faker->text,
        'profile' => $this->faker->text,
        'email_verified' => $this->faker->word,
        'password_changed' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
