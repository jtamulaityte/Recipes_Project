<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 10; $i++) {
        //     Ingredient::create([
        //         'name' => fake()->firstName,
        //         'is_active' => fake()->boolean,
        //     ]);
        // }

        $ingredients = [
            [
                'name' => 'Chicken',
                'is_active' => 1,
            ],
            [
                'name' => 'Water',
                'is_active' => 0,
            ],
            [
                'name' => 'Milk',
                'is_active' => 1,
            ],
            [
                'name' => 'Eggs',
                'is_active' => 0,
            ],
            [
                'name' => 'Flour',
                'is_active' => 1,
            ],
            [
                'name' => 'Potatoes',
                'is_active' => 1,
            ],
            [
                'name' => 'Cocoa',
                'is_active' => 0,
            ],
            [
                'name' => 'Beef',
                'is_active' => 1,
            ],
            [
                'name' => 'Butter',
                'is_active' => 1,
            ],
            [
                'name' => 'Carrots',
                'is_active' => 1,
            ],
        ];
        
        foreach ($ingredients as $ingredient) {
            Ingredient::create([
                'name' => $ingredient['name'],
                'is_active' => $ingredient['is_active'],
            ]);
        }
    }
}
