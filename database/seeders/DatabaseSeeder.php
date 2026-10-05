<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Material;
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
        User::factory()->has(Product::factory(4))->create([
            'name' => 'Admin User',
            'company' => 'Duck Goose',
            'email' => 'admin@admin.com',
        ]);

        User::factory(3)->has(Product::factory(4))->create([]);

        Material::factory(8)->create([]); 
    }
}
