<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
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
            'title' => $this->faker->name(),
            'content' => 'Post description',
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
            'likes' => random_int(0, 100),
            'is_published' => true,
            'category_id' => Category::get()->random()->id,
        ];
    }
}
