<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 10; $i++) {
        //     Category::create([
        //         'name' => fake()->firstName,
        //         'is_active' => fake()->boolean,
        //     ]);
        // }

        $categories = [
            [
                'name' => 'Main course',
                'is_active' => 1,
            ],
            [
                'name' => 'Soups',
                'is_active' => 1,
            ],
            [
                'name' => 'Desserts',
                'is_active' => 1,
            ],
            [
                'name' => 'Salad',
                'is_active' => 0,
            ],
            [
                'name' => 'Drinks',
                'is_active' => 1,
            ],
        ];
        
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'is_active' => $category['is_active'],
            ]);
        }
    }
}
