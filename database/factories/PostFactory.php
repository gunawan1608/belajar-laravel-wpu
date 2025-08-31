<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text(),
            'image' => 'https://i.pinimg.com/736x/a2/9c/90/a29c9094ba13e87ea88f6d95f709839a.jpg',
            'author_image' => 'https://i.pinimg.com/736x/69/b7/c8/69b7c80deee6a7e78faf5056b3259506.jpg',
            'created_at' => now()
        ];
    }
}
