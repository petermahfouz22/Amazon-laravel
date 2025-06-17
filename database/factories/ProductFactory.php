<?php

namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'product_title' => fake()->words(3, true),
            'rating' => fake()->randomFloat(1, 1, 5),
            'quantity_sold' => fake()->numberBetween(0, 500),
            'price' => fake()->randomFloat(2, 10, 1000),
            'discount_creditcard' => fake()->numberBetween(0, 50),
            'categoryId' => Category::factory(),
        ];
    }
}
