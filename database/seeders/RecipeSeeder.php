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
        $recipes =[
        [
                'name' => 'Spaghetti Bolognese',
                'description' => 'A classic Italian dish loved by all! This Spaghetti Bolognese features al dente pasta topped with a rich, savory tomato and ground beef sauce, seasoned with aromatic garlic and onions. Perfect for a comforting meal that brings the taste of Italy to your table.',
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
                'description' => 'Indulge in this moist and decadent chocolate cake, made with rich cocoa and a blend of smooth milk and butter. Perfectly baked for a soft, fluffy texture, this treat is ideal for chocolate lovers craving a sweet delight.',
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
                'description' => 'Experience the bold flavors of this hearty chicken curry! Tender chicken is simmered in a rich, creamy coconut milk sauce, infused with aromatic curry spices, garlic, and onion. A warm and satisfying dish to spice up your dinner.',
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
                'description' => 'Light, refreshing, and packed with flavor! This Caesar Salad combines crisp lettuce, crunchy croutons, and creamy Caesar dressing, topped with a generous sprinkle of Parmesan cheese. A classic choice for a quick and healthy meal or side dish.',
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
                'description' => 'Warm and hearty, this beef stew is the ultimate comfort food. Tender beef chunks are slow-cooked with potatoes, carrots, garlic, and onion in a rich beef broth. A satisfying and flavorful dish for cozy evenings.',
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
                'description' => 'Quick and healthy, this vegetable stir fry is a colorful medley of fresh carrots, broccoli, and bell peppers, lightly sautéed with garlic and soy sauce. A perfect side dish or light meal bursting with natural flavors.',
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
                'description' => 'Simple yet elegant, this grilled salmon is perfectly seasoned with garlic, olive oil, salt, and pepper. Cooked to tender perfection and served with a splash of lemon juice, it’s a healthy and flavorful main course.',
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
                'description' => 'Fluffy and golden brown, these pancakes are perfect for breakfast or brunch. Made with simple ingredients, they’re soft, light, and delicious. Top with syrup, fresh fruits, or your favorite toppings for a delightful treat everyone will love.',
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
                'description' => 'A hearty and cheesy Italian favorite! This lasagna is layered with tender sheets, rich meat sauce, and gooey mozzarella cheese. Baked to perfection, it’s a comforting and satisfying dish that’s great for family dinners or special occasions.',
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
                'description' => 'Quick, fun, and flavorful, these tacos are packed with seasoned ground beef, fresh veggies, and creamy toppings. Perfect for Taco Tuesday or any casual meal, they’re easy to assemble and guaranteed to please everyone at the table.',
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
                'description' => 'Classic and simple, this Margarita Pizza is topped with fresh tomato sauce, creamy mozzarella cheese, and fragrant basil leaves. Baked to crispy perfection, it’s a timeless Italian dish that’s light, flavorful, and perfect for any occasion.',
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
                'description' => 'Warm and nourishing, this vegetable soup is made with fresh carrots, potatoes, celery, and tomatoes simmered in a savory broth. Perfect for a light lunch or dinner, it’s a comforting dish packed with wholesome goodness.',
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
                'description' => 'A seafood lover’s delight, Shrimp Scampi combines tender shrimp sautéed in a garlic and butter sauce with a hint of lemon. Tossed with spaghetti and sprinkled with fresh parsley, it’s an elegant yet easy-to-make dish.',
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
                'description' => 'These beef tacos are loaded with flavorful seasoned meat, fresh lettuce, juicy tomatoes, and melted cheese. Served in crunchy taco shells, they’re a satisfying and versatile dish perfect for a quick dinner or casual gathering.',
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
                'description' => 'A refreshing mix of apples, bananas, grapes, and oranges drizzled with lemon juice and a touch of honey. This colorful fruit salad is a healthy and delicious way to enjoy nature’s sweetness, perfect as a snack or dessert.',
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
                'description' => 'A quick and tasty meal made with leftover rice, fresh veggies, and savory soy sauce. This fried rice is a flavorful and versatile dish perfect for a satisfying lunch or dinner. Top it off with green onions for an extra pop of freshness.',
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
                'description' => 'Simple yet satisfying, this creamy egg salad is made with boiled eggs, mayo, and a touch of mustard. Perfect as a light lunch or a hearty sandwich filling, it’s a versatile dish that’s both delicious and easy to make.',
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
                'description' => 'Rich and creamy, this Chicken Alfredo combines tender chicken breast with silky fettuccine in a Parmesan-laden sauce. A comforting classic, it’s perfect for a quick yet indulgent dinner that feels like a restaurant-quality treat.',
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
                'description' => 'Crispy, golden, and irresistibly delicious! These chicken wings are seasoned to perfection and fried until crunchy. Perfect as a party appetizer or game-day snack, pair them with your favorite dipping sauce for a crowd-pleasing treat.',
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
                'description' => 'Simple and aromatic, this Pesto Pasta is a fresh mix of al dente pasta, vibrant basil pesto, and toasted pine nuts. Topped with grated Parmesan, it’s a quick and elegant meal that brings the flavors of Italy to your table.',
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
