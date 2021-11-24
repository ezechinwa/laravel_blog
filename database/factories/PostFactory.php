<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        id, category_id, user_id, title, slug, body, excerpt, created_at, updated_at

        return [
            'category_id' => rand(1,3),
            'user_id' => rand(1,3),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(),
            'excerpt' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
