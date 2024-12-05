<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Spaghetti Bolognese',
                'ingredients' => 'Spagheti 20gr \nHello 20gr \n Hello 19gr',
                'procedures' => 'Cook spaghetti according to package instructions. \n
                    Heat olive oil in a pan and sauté garlic and onion until fragrant. \n
                    Add ground beef and cook until browned. \n
                    Stir in tomato sauce and let it simmer for 10 minutes. \n
                    Season with salt and pepper. Serve sauce over spaghetti.',
                'food_image' => 'spaghetti-bolognese.jpg',
            ],
            [
                'name' => 'Chocolate Cake',
                'ingredients' => 'Spagheti 20gr \nHello 20gr \n Hello 19gr',
                'procedures' => 'Cook spaghetti according to package instructions. \n
                    Heat olive oil in a pan and sauté garlic and onion until fragrant. \n
                    Add ground beef and cook until browned. \n
                    Stir in tomato sauce and let it simmer for 10 minutes. \n
                    Season with salt and pepper. Serve sauce over spaghetti.',
                'food_image' => 'chocolate-cake.jpg',
            ],
        ];


        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
