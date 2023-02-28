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
        // for ($i = 0; $i < 10; $i++) {
        //     Recipe::create([
        //         'name' => fake()->firstName,
        //         'description' => fake()->firstName,
        //         'is_active' => fake()->boolean,
        //     ]);
        // }

        $recipes = [
            [
                'name' => 'Baked Chicken Wings',
                'category_id' => 1,
                'description' => 'These baked chicken wings are easy, crispy, and delicious! I normally serve them with a side of rice, chicken gravy, and a vegetable or salad.',
                'is_active' => 1,
            ],
            [
                'name' => 'Roasted Broccoli Soup',
                'category_id' => 2,
                'description' => 'Blend roasted broccoli, cream cheese, and vegetable broth to make a simple, yet delicious soup. Roasting broccoli enhances its flavor, allowing nutty and sweet flavors to develop.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chocolate Pistachio Cheesecake',
                'category_id' => 3,
                'description' => 'They say imitation is the sincerest form of flattery. In that spirit, we are knocking off indulgent layered cheesecake with a healthier version.',
                'is_active' => 1,
            ],
            [
                'name' => 'Apple Spinach Salad',
                'category_id' => 4,
                'description' => 'The addition of nuts and fruit makes this salad extra special.',
                'is_active' => 1,
            ],
            [
                'name' => 'Peanut Butter Banana Smoothie',
                'category_id' => 5,
                'description' => 'This peanut butter banana smoothie is so refreshing, and it is sweet and tasty.',
                'is_active' => 1,
            ],
            [
                'name' => 'Slow Cooker Beef Stew',
                'category_id' => 1,
                'description' => 'This easy slow cooker beef stew recipe made with potatoes, carrots, celery, broth, herbs, and spices is hearty and comforting. You will not be slow to say yum!',
                'is_active' => 1,
            ],
            [
                'name' => 'Gazpacho',
                'category_id' => 2,
                'description' => 'Wonderful cold soup full of fresh Mediterranean vegetables! Quick and easy.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Minestrone Soup',
                'category_id' => 2,
                'description' => 'Take a classic minestrone soup full of fresh, wholesome vegetables, and add an additional layer of flavor with tender, juicy chicken.',
                'is_active' => 1,
            ],
            [
                'name' => 'Cherry Crunch Dessert',
                'category_id' => 3,
                'description' => 'For those who love cheesecake, but do not like the heavy texture or the time it takes to make a traditional cheesecake.',
                'is_active' => 1,
            ],
            [
                'name' => 'Eggnog Custard',
                'category_id' => 3,
                'description' => 'This eggnog custard is a holiday favorite in my family. The custard is soft and yummy! If you like eggnog, you should try this dish.',
                'is_active' => 0,
            ],
            [
                'name' => 'Spiked Lemonade',
                'category_id' => 5,
                'description' => 'Homemade lemonade spiked with rum - the perfect tropical cooler on a hot day. Makes 1 large drink or 2 smaller ones.',
                'is_active' => 1,
            ],
            [
                'name' => 'Gluehwein',
                'category_id' => 5,
                'description' => 'Gluehwein (also spelled Glühwein) is a hot spiced "glow wine" that is found in many winter markets in Germany and Austria.',
                'is_active' => 0,
            ],
            [
                'name' => 'Best Lasagna',
                'category_id' => 1,
                'description' => 'Making lasagna can be time-consuming, but the results are well worth the wait. You will find a detailed ingredient list and step-by-step instructions in the recipe below, but lets go over the basics.',
                'is_active' => 1,
            ],
            [
                'name' => 'Old-Fashioned Potato Salad',
                'category_id' => 4,
                'description' => 'This potato salad recipe is for the traditional creamy type of potato salad, with eggs, celery, and relish. It is perfect for making ahead to let the flavors develop.',
                'is_active' => 1,
            ],
            [
                'name' => 'Bananas Foster Cake',
                'category_id' => 3,
                'description' => 'A dense cake filled with a warm banana-rum filling and a sweet creamy buttercream with banana caramel - a rich and sweet dessert with pops of fruity banana.',
                'is_active' => 0,
            ],
            [
                'name' => 'Apple-Cranberry Crostada',
                'category_id' => 3,
                'description' => 'While a good pie crust ought to be a part of every cook has repertoire, sometimes there just is not the time. But why leave the baking to the grocery stores or bakery when puff pastry is a simple, high-quality stand-in for the original? In this Crostada, the sheet dough is baked free-form with ingredients piled on top. Could not be easier!',
                'is_active' => 0,
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create([
                'name' => $recipe['name'],
                'category_id' => $recipe['category_id'],
                'description' => $recipe['description'],
                'is_active' => $recipe['is_active'],
            ]);
        }
    }
}
