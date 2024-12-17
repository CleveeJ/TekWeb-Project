<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();
        $recipeIds = Recipe::pluck('id')->toArray();

        $commentTemplates = [
            ['rating' => 1, 'comment' => 'Resep ini kurang sesuai dengan ekspektasi saya.'],
            ['rating' => 2, 'comment' => 'Biasa saja, butuh beberapa penyesuaian.'],
            ['rating' => 3, 'comment' => 'Resep yang cukup baik, mudah diikuti.'],
            ['rating' => 4, 'comment' => 'Resep ini lezat dan patut dicoba!'],
            ['rating' => 5, 'comment' => 'Sangat luar biasa! Rekomendasi terbaik!'],
        ];

        for ($i = 0; $i < 50; $i++) {
            $selectedTemplate = $commentTemplates[array_rand($commentTemplates)];
            Comment::create([
                'user_id' => $userIds[array_rand($userIds)],
                'recipe_id' => $recipeIds[array_rand($recipeIds)],
                'rating' => $selectedTemplate['rating'],
                'comment' => $selectedTemplate['comment'],
            ]);
        }
    }
}
