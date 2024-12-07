<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
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
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
        ];


        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
