<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Recipe::create([
                'name' => fake()->firstName,
                'description' => fake()->firstName,
                'is_active' => fake()->boolean,
            ]);
        }
    }
}
