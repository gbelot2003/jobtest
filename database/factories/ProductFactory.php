<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produc>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'price' => fake()->randomNumber(3, 2),
            'description' => fake()->paragraph,
            'category' => fake()->word,
            'image' => fake()->imageUrl($width = 200, $height = 200),
        ];
    }
}
