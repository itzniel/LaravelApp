<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryIds = \App\Models\Category::pluck('id')->all();
        $userIds = \App\Models\User::pluck('id')->all();
        return [
            'name' => fake()->word, //fake name for the category
            'body' => fake()->sentence, // fake description for the category
            'category_id'=> fake()->randomElement($categoryIds),
            'author_id' => fake()->randomElement($userIds),
        ];
    }
}
