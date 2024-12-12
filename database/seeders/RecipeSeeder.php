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
                'ingredients' => 'Spaghetti 200gr \nGround Beef 150gr \nTomato Sauce 100gr \nGarlic 2 cloves \nOnion 1 \nOlive oil 2 tbsp \nSalt and pepper to taste',
                'procedures' => 'Cook spaghetti according to package instructions. \nHeat olive oil in a pan and sauté garlic and onion until fragrant. \nAdd ground beef and cook until browned. \nStir in tomato sauce and let it simmer for 10 minutes. \nSeason with salt and pepper. Serve sauce over spaghetti.',
                'food_image' => 'recipe-image/spaghetti-bolognese.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chocolate Cake',
                'ingredients' => 'Flour 200gr \nSugar 150gr \nCocoa powder 50gr \nEggs 2 \nMilk 100ml \nButter 100gr \nBaking powder 1 tsp \nVanilla extract 1 tsp',
                'procedures' => 'Preheat oven to 180°C. \nMix dry ingredients (flour, cocoa powder, sugar, baking powder). \nIn a separate bowl, whisk eggs, milk, melted butter, and vanilla extract. \nCombine wet and dry ingredients, mix well. \nPour batter into greased cake pan and bake for 30 minutes. \nCool before serving.',
                'food_image' => 'recipe-image/chocolate-cake.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chicken Curry',
                'ingredients' => 'Chicken 500gr \nCurry powder 2 tbsp \nCoconut milk 200ml \nOnion 1 \nGarlic 3 cloves \nOlive oil 2 tbsp \nSalt and pepper to taste',
                'procedures' => 'Heat olive oil in a pot and sauté garlic and onion until soft. \nAdd chicken pieces and cook until browned. \nStir in curry powder, then add coconut milk and bring to a simmer. \nLet it cook for 20 minutes, season with salt and pepper.',
                'food_image' => 'recipe-image/chicken-curry.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Caesar Salad',
                'ingredients' => 'Lettuce 100gr \nCroutons 50gr \nParmesan cheese 30gr \nCaesar dressing 3 tbsp',
                'procedures' => 'Wash and chop the lettuce. \nToss lettuce with croutons and Caesar dressing. \nTop with grated Parmesan cheese.',
                'food_image' => 'recipe-image/caesar-salad.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Beef Stew',
                'ingredients' => 'Beef chunks 500gr \nPotatoes 3 \nCarrots 2 \nOnion 1 \nGarlic 3 cloves \nBeef broth 500ml \nSalt and pepper to taste',
                'procedures' => 'Brown beef chunks in a pot. \nAdd chopped onion and garlic, cook until fragrant. \nAdd chopped potatoes and carrots, then pour in beef broth. \nBring to a boil, then simmer for 1 hour. \nSeason with salt and pepper.',
                'food_image' => 'recipe-image/beef-stew.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Vegetable Stir Fry',
                'ingredients' => 'Carrots 2 \nBell pepper 1 \nBroccoli 100gr \nSoy sauce 2 tbsp \nOlive oil 2 tbsp \nGarlic 2 cloves',
                'procedures' => 'Chop vegetables into bite-size pieces. \nHeat olive oil in a pan and sauté garlic until fragrant. \nAdd vegetables and stir fry for 5-7 minutes. \nAdd soy sauce and stir well.',
                'food_image' => 'recipe-image/vegetable-stir-fry.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Grilled Salmon',
                'ingredients' => 'Salmon fillets 2 \nLemon 1 \nOlive oil 2 tbsp \nGarlic 2 cloves \nSalt and pepper to taste',
                'procedures' => 'Preheat grill to medium heat. \nSeason salmon with olive oil, garlic, salt, and pepper. \nGrill salmon for 5-7 minutes on each side, until cooked through. \nServe with lemon wedges.',
                'food_image' => 'recipe-image/grilled-salmon.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Pancakes',
                'ingredients' => 'Flour 200gr \nMilk 200ml \nEgg 1 \nBaking powder 1 tsp \nSugar 2 tbsp \nButter 30gr',
                'procedures' => 'Mix all ingredients into a smooth batter. \nHeat a non-stick pan and pour batter in small circles. \nCook until bubbles appear on the surface, then flip and cook for another minute.',
                'food_image' => 'recipe-image/pancakes.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Lasagna',
                'ingredients' => 'Lasagna sheets 10 \nGround beef 300gr \nTomato sauce 200gr \nMozzarella cheese 150gr \nOnion 1 \nGarlic 2 cloves',
                'procedures' => 'Cook lasagna sheets according to package instructions. \nBrown ground beef in a pan, then add chopped onion, garlic, and tomato sauce. \nLayer lasagna sheets, beef mixture, and cheese in a baking dish. \nBake at 180°C for 30 minutes.',
                'food_image' => 'recipe-image/lasagna.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Tacos',
                'ingredients' => 'Taco shells 6 \nGround beef 300gr \nLettuce 100gr \nTomato 1 \nCheddar cheese 100gr \nSour cream 2 tbsp',
                'procedures' => 'Cook ground beef with taco seasoning. \nWarm taco shells in the oven. \nAssemble tacos with ground beef, lettuce, tomato, cheese, and sour cream.',
                'food_image' => 'recipe-image/tacos.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Margarita Pizza',
                'ingredients' => 'Pizza dough 1 \nTomato sauce 100gr \nMozzarella cheese 150gr \nBasil leaves 10 \nOlive oil 1 tbsp',
                'procedures' => 'Preheat the oven to 220°C. \nRoll out the pizza dough and spread tomato sauce over the surface. \nTop with mozzarella cheese and fresh basil leaves. \nDrizzle with olive oil and bake for 12-15 minutes or until golden.',
                'food_image' => 'recipe-image/margarita-pizza.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Vegetable Soup',
                'ingredients' => 'Carrots 2 \nPotatoes 2 \nCelery 2 stalks \nTomato 1 \nVegetable broth 500ml \nOlive oil 2 tbsp \nSalt and pepper to taste',
                'procedures' => 'Chop vegetables into small pieces. \nHeat olive oil in a pot, sauté vegetables until softened. \nAdd vegetable broth and bring to a boil. \nSimmer for 20-30 minutes, season with salt and pepper.',
                'food_image' => 'recipe-image/vegetable-soup.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Shrimp Scampi',
                'ingredients' => 'Shrimp 300gr \nGarlic 3 cloves \nLemon juice 2 tbsp \nButter 2 tbsp \nParsley 2 tbsp \nSpaghetti 200gr \nOlive oil 2 tbsp',
                'procedures' => 'Cook spaghetti according to package instructions. \nHeat olive oil and butter in a pan, sauté garlic until fragrant. \nAdd shrimp and cook until pink, then add lemon juice. \nToss the cooked spaghetti with the shrimp mixture and sprinkle with parsley.',
                'food_image' => 'recipe-image/shrimp-scampi.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Beef Tacos',
                'ingredients' => 'Ground beef 300gr \nTaco seasoning 1 packet \nTaco shells 6 \nLettuce 100gr \nTomato 1 \nCheddar cheese 100gr \nSour cream 2 tbsp',
                'procedures' => 'Cook ground beef with taco seasoning according to package instructions. \nWarm taco shells in the oven. \nAssemble tacos with ground beef, lettuce, tomato, cheese, and sour cream.',
                'food_image' => 'recipe-image/beef-tacos.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Fruit Salad',
                'ingredients' => 'Apple 1 \nBanana 1 \nGrapes 100gr \nOrange 1 \nLemon juice 1 tbsp \nHoney 1 tbsp',
                'procedures' => 'Chop fruits into bite-sized pieces. \nIn a bowl, combine all fruits, drizzle with lemon juice and honey. \nToss gently to combine and serve chilled.',
                'food_image' => 'recipe-image/fruit-salad.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Fried Rice',
                'ingredients' => 'Cooked rice 2 cups \nCarrots 1 \nPeas 50gr \nSoy sauce 2 tbsp \nEgg 1 \nGreen onions 2 \nOlive oil 2 tbsp',
                'procedures' => 'Heat olive oil in a pan and sauté diced carrots and peas. \nPush the vegetables to the side and scramble the egg in the same pan. \nAdd cooked rice and soy sauce, stir well, and cook for another 5 minutes. \nTop with chopped green onions before serving.',
                'food_image' => 'recipe-image/fried-rice.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Egg Salad',
                'ingredients' => 'Eggs 4 \nMayonnaise 3 tbsp \nMustard 1 tbsp \nLettuce 100gr \nSalt and pepper to taste',
                'procedures' => 'Boil eggs and chop them into small pieces. \nIn a bowl, mix eggs, mayonnaise, mustard, salt, and pepper. \nServe on a bed of lettuce or as a sandwich.',
                'food_image' => 'recipe-image/egg-salad.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chicken Alfredo',
                'ingredients' => 'Chicken breast 2 \nFettuccine pasta 200gr \nHeavy cream 200ml \nParmesan cheese 100gr \nButter 2 tbsp \nGarlic 2 cloves',
                'procedures' => 'Cook fettuccine according to package instructions. \nIn a pan, sauté garlic in butter, then add chicken breast and cook until browned. \nAdd heavy cream and bring to a simmer, then stir in Parmesan cheese. \nToss the cooked pasta in the sauce and serve.',
                'food_image' => 'recipe-image/chicken-alfredo.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Crispy Chicken Wings',
                'ingredients' => 'Chicken wings 500gr \nFlour 100gr \nPaprika 1 tsp \nGarlic powder 1 tsp \nSalt and pepper to taste \nOil for frying',
                'procedures' => 'Season chicken wings with paprika, garlic powder, salt, and pepper. \nDredge in flour and fry in hot oil until crispy and golden brown. \nServe with your favorite dipping sauce.',
                'food_image' => 'recipe-image/crispy-chicken-wings.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Pesto Pasta',
                'ingredients' => 'Pasta 200gr \nBasil pesto 4 tbsp \nParmesan cheese 50gr \nPine nuts 30gr \nOlive oil 2 tbsp',
                'procedures' => 'Cook pasta according to package instructions. \nToss cooked pasta with basil pesto, olive oil, and pine nuts. \nTop with grated Parmesan cheese before serving.',
                'food_image' => 'recipe-image/pesto-pasta.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
        ];


        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
