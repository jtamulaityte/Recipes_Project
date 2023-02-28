<?php

namespace Database\Seeders;

use App\Models\IngredientRecipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients_recipe = [
            [
                'recipe_id' => 1,
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 2,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 3,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 6,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 10,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 9,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 3,
            ],
        ];
 
        foreach ($ingredients_recipe as $item) {
            IngredientRecipe::create([
                'recipe_id' => $item['recipe_id'],
                'ingredient_id' => $item['ingredient_id'],
            ]);
        }
    }
}
