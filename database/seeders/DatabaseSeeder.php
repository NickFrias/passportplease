<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Material::factory(8)->create([]);

        User::factory()->has(Product::factory(4))->create([
            'name' => 'Admin User',
            'company' => 'Duck Goose',
            'email' => 'admin@admin.com',
        ]);
        User::factory(3)->has(Product::factory(4))->create();

        foreach (Product::all() as $product) {
            $count = rand(1, Material::count());
            $pickedMaterials = Material::inRandomOrder()->take($count)->get();
            $remaining = 100;
            $stillToGo = $count;

            foreach ($pickedMaterials as $material) {
                $share = rand(1, intdiv($remaining, $stillToGo));
                $product->materials()->attach($material->id, ['percentage' => $share]);
                $remaining = $remaining - $share;
                $stillToGo--;
            }
        }

    }
}
