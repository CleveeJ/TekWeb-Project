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
                'ingredients' => "Spaghetti 200gr
        Ground Beef 150gr
        Tomato Sauce 100gr
        Garlic 2 cloves
        Onion 1
        Olive oil 2 tbsp
        Salt and pepper to taste",
                'procedures' => "Cook spaghetti according to package instructions.
        Heat olive oil in a pan and sauté garlic and onion until fragrant.
        Add ground beef and cook until browned.
        Stir in tomato sauce and let it simmer for 10 minutes.
        Season with salt and pepper. Serve sauce over spaghetti.",
                'food_image' => 'recipe-image/spaghetti-bolognese.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chocolate Cake',
                'ingredients' => "Flour 200gr
        Sugar 150gr
        Cocoa powder 50gr
        Eggs 2
        Milk 100ml
        Butter 100gr
        Baking powder 1 tsp
        Vanilla extract 1 tsp",
                'procedures' => "Preheat oven to 180°C.
        Mix dry ingredients (flour, cocoa powder, sugar, baking powder).
        In a separate bowl, whisk eggs, milk, melted butter, and vanilla extract.
        Combine wet and dry ingredients, mix well.
        Pour batter into greased cake pan and bake for 30 minutes.
        Cool before serving.",
                'food_image' => 'recipe-image/chocolate-cake.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chicken Curry',
                'ingredients' => "Chicken 500gr
        Curry powder 2 tbsp
        Coconut milk 200ml
        Onion 1
        Garlic 3 cloves
        Olive oil 2 tbsp
        Salt and pepper to taste",
                'procedures' => "Heat olive oil in a pot and sauté garlic and onion until soft.
        Add chicken pieces and cook until browned.
        Stir in curry powder, then add coconut milk and bring to a simmer.
        Let it cook for 20 minutes, season with salt and pepper.",
                'food_image' => 'recipe-image/chicken-curry.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Caesar Salad',
                'ingredients' => "Lettuce 100gr
        Croutons 50gr
        Parmesan cheese 30gr
        Caesar dressing 3 tbsp",
                'procedures' => "Wash and chop the lettuce.
        Toss lettuce with croutons and Caesar dressing.
        Top with grated Parmesan cheese.",
                'food_image' => 'recipe-image/caesar-salad.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Beef Stew',
                'ingredients' => "Beef chunks 500gr
        Potatoes 3
        Carrots 2
        Onion 1
        Garlic 3 cloves
        Beef broth 500ml
        Salt and pepper to taste",
                'procedures' => "Brown beef chunks in a pot.
        Add chopped onion and garlic, cook until fragrant.
        Add chopped potatoes and carrots, then pour in beef broth.
        Bring to a boil, then simmer for 1 hour.
        Season with salt and pepper.",
                'food_image' => 'recipe-image/beef-stew.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Vegetable Stir Fry',
                'ingredients' => "Carrots 2
        Bell pepper 1
        Broccoli 100gr
        Soy sauce 2 tbsp
        Olive oil 2 tbsp
        Garlic 2 cloves",
                'procedures' => "Chop vegetables into bite-size pieces.
        Heat olive oil in a pan and sauté garlic until fragrant.
        Add vegetables and stir fry for 5-7 minutes.
        Add soy sauce and stir well.",
                'food_image' => 'recipe-image/vegetable-stir-fry.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Grilled Salmon',
                'ingredients' => "Salmon fillets 2
        Lemon 1
        Olive oil 2 tbsp
        Garlic 2 cloves
        Salt and pepper to taste",
                'procedures' => "Preheat grill to medium heat.
        Season salmon with olive oil, garlic, salt, and pepper.
        Grill salmon for 5-7 minutes on each side, until cooked through.
        Serve with lemon wedges.",
                'food_image' => 'recipe-image/grilled-salmon.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Pancakes',
                'ingredients' => "Flour 200gr
        Milk 200ml
        Egg 1
        Baking powder 1 tsp
        Sugar 2 tbsp
        Butter 30gr",
                'procedures' => "Mix all ingredients into a smooth batter.
        Heat a non-stick pan and pour batter in small circles.
        Cook until bubbles appear on the surface, then flip and cook for another minute.",
                'food_image' => 'recipe-image/pancakes.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Lasagna',
                'ingredients' => "Lasagna sheets 10
        Ground beef 300gr
        Tomato sauce 200gr
        Mozzarella cheese 150gr
        Onion 1
        Garlic 2 cloves",
                'procedures' => "Cook lasagna sheets according to package instructions.
        Brown ground beef in a pan, then add chopped onion, garlic, and tomato sauce.
        Layer lasagna sheets, beef mixture, and cheese in a baking dish.
        Bake at 180°C for 30 minutes.",
                'food_image' => 'recipe-image/lasagna.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Tacos',
                'ingredients' => "Taco shells 6
        Ground beef 300gr
        Lettuce 100gr
        Tomato 1
        Cheddar cheese 100gr
        Sour cream 2 tbsp",
                'procedures' => "Cook ground beef with taco seasoning.
        Warm taco shells in the oven.
        Assemble tacos with ground beef, lettuce, tomato, cheese, and sour cream.",
                'food_image' => 'recipe-image/tacos.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Margarita Pizza',
                'ingredients' => "Pizza dough 1
            Tomato sauce 100gr
            Mozzarella cheese 150gr
            Basil leaves 10
            Olive oil 1 tbsp",
                'procedures' => "Preheat the oven to 220°C.
            Roll out the pizza dough and spread tomato sauce over the surface.
            Top with mozzarella cheese and fresh basil leaves.
            Drizzle with olive oil and bake for 12-15 minutes or until golden.",
                'food_image' => 'recipe-image/margarita-pizza.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Vegetable Soup',
                'ingredients' => "Carrots 2
            Potatoes 2
            Celery 2 stalks
            Tomato 1
            Vegetable broth 500ml
            Olive oil 2 tbsp
            Salt and pepper to taste",
                'procedures' => "Chop vegetables into small pieces.
            Heat olive oil in a pot, sauté vegetables until softened.
            Add vegetable broth and bring to a boil.
            Simmer for 20-30 minutes, season with salt and pepper.",
                'food_image' => 'recipe-image/vegetable-soup.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Shrimp Scampi',
                'ingredients' => "Shrimp 300gr
            Garlic 3 cloves
            Lemon juice 2 tbsp
            Butter 2 tbsp
            Parsley 2 tbsp
            Spaghetti 200gr
            Olive oil 2 tbsp",
                'procedures' => "Cook spaghetti according to package instructions.
            Heat olive oil and butter in a pan, sauté garlic until fragrant.
            Add shrimp and cook until pink, then add lemon juice.
            Toss the cooked spaghetti with the shrimp mixture and sprinkle with parsley.",
                'food_image' => 'recipe-image/shrimp-scampi.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Beef Tacos',
                'ingredients' => "Ground beef 300gr
            Taco seasoning 1 packet
            Taco shells 6
            Lettuce 100gr
            Tomato 1
            Cheddar cheese 100gr
            Sour cream 2 tbsp",
                'procedures' => "Cook ground beef with taco seasoning according to package instructions.
            Warm taco shells in the oven.
            Assemble tacos with ground beef, lettuce, tomato, cheese, and sour cream.",
                'food_image' => 'recipe-image/beef-tacos.jpg',
                'user_id' => User::where('email', 'a2@gmail.com')->first()->id,
            ],
            [
                'name' => 'Fruit Salad',
                'ingredients' => "Apple 1
            Banana 1
            Grapes 100gr
            Orange 1
            Lemon juice 1 tbsp
            Honey 1 tbsp",
                'procedures' => "Chop fruits into bite-sized pieces.
            In a bowl, combine all fruits, drizzle with lemon juice and honey.
            Toss gently to combine and serve chilled.",
                'food_image' => 'recipe-image/fruit-salad.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Fried Rice',
                'ingredients' => "Cooked rice 2 cups
            Carrots 1
            Peas 50gr
            Soy sauce 2 tbsp
            Egg 1
            Green onions 2
            Olive oil 2 tbsp",
                'procedures' => "Heat olive oil in a pan and sauté diced carrots and peas.
            Push the vegetables to the side and scramble the egg in the same pan.
            Add cooked rice and soy sauce, stir well, and cook for another 5 minutes.
            Top with chopped green onions before serving.",
                'food_image' => 'recipe-image/fried-rice.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Egg Salad',
                'ingredients' => "Eggs 4
            Mayonnaise 3 tbsp
            Mustard 1 tbsp
            Lettuce 100gr
            Salt and pepper to taste",
                'procedures' => "Boil eggs and chop them into small pieces.
            In a bowl, mix eggs, mayonnaise, mustard, salt, and pepper.
            Serve on a bed of lettuce or as a sandwich.",
                'food_image' => 'recipe-image/egg-salad.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],
            [
                'name' => 'Chicken Alfredo',
                'ingredients' => "Chicken breast 2
            Fettuccine pasta 200gr
            Heavy cream 200ml
            Parmesan cheese 100gr
            Butter 2 tbsp
            Garlic 2 cloves",
                'procedures' => "Cook fettuccine according to package instructions.
            In a pan, sauté garlic in butter, then add chicken breast and cook until browned.
            Add heavy cream and bring to a simmer, then stir in Parmesan cheese.
            Toss the cooked pasta in the sauce and serve.",
                'food_image' => 'recipe-image/chicken-alfredo.jpg',
                'user_id' => User::where('email', 'a3@gmail.com')->first()->id,
            ],
            [
                'name' => 'Crispy Chicken Wings',
                'ingredients' => "Chicken wings 500gr
            Flour 100gr
            Paprika 1 tsp
            Garlic powder 1 tsp
            Salt and pepper to taste
            Oil for frying",
                'procedures' => "Season chicken wings with paprika, garlic powder, salt, and pepper.
            Dredge in flour and fry in hot oil until crispy and golden brown.
            Serve with your favorite dipping sauce.",
                'food_image' => 'recipe-image/crispy-chicken-wings.jpg',
                'user_id' => User::where('email', 'a4@gmail.com')->first()->id,
            ],
            [
                'name' => 'Pesto Pasta',
                'ingredients' => "Pasta 200gr
            Basil pesto 4 tbsp
            Parmesan cheese 50gr
            Pine nuts 30gr
            Olive oil 2 tbsp",
                'procedures' => "Cook pasta according to package instructions.
            Toss cooked pasta with basil pesto, olive oil, and pine nuts.
            Top with grated Parmesan cheese before serving.",
                'food_image' => 'recipe-image/pesto-pasta.jpg',
                'user_id' => User::where('email', 'a1@gmail.com')->first()->id,
            ],            
        ];


        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
