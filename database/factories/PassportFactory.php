<?php

namespace Database\Factories;

use App\Models\Passport;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Passport>
 */
class PassportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'slug' => fake()->unique()->slug(),
            'is_published' => fake()->boolean(),
            'qr_path' => null,
        ];
    }
}
