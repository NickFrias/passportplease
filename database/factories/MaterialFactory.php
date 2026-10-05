<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Steel', 'Wood', 'Plastic', 'Iron', 'Aluminion','Adamantium', 'Vibranium', 'Oak', 'Mithril', 'Lembras', 'Kyber', 'Titanium']),
            'description' => fake()->text(50),
        ];
    }
}
