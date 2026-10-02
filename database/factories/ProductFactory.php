<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'user_id' => User::factory(),
            'name' => fake()->words(2, true),
            'sku' => fake()->unique()->bothify('?????-#####'),
            'description' => fake()->text(50),
            'category' => fake()->randomElement(['table', 'chair', 'bureau', 'bed base', 'sofa']),
            'weight' => fake()->randomFloat(2, 1, 100),
            'dimensions' => fake()->numerify('## x ## x ## cm'),
            'image' => null,
        ]; 
    }
}
