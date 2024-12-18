<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    protected $modelRecipe;

    public function __construct(Recipe $modelRecipe)
    {
        $this->modelRecipe = $modelRecipe;
    }

    public function recipes()
    {
        $recipes = Recipe::with('user')
            ->leftJoin('comments', 'recipes.id', '=', 'comments.recipe_id')
            ->select('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image', \DB::raw('ROUND(AVG(comments.rating), 2) as average_rating'))
            ->groupBy('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image')
            ->get();
        $data = [];
        foreach ($recipes as $r) {
            $try = [];
            $try['id'] = $r->id;
            $try['name'] = $r->name;
            $try['image'] = $r->food_image ? Storage::url($r->food_image) : null; //Belum Storage $r->food_image ? Storage::url($r->food_image) : null,
            $try['user_name'] = $r->user->username;
            $try['rating'] = $r->average_rating ? $r->average_rating : 0;
            $data[] = $try;
        }
        return view('recipes', [
            'title' => 'All Recipes',
            'recipes' => $data,
        ]);
    }

    public function myrecipes()
    {
        $recipes = Recipe::with('user')
            ->leftJoin('comments', 'recipes.id', '=', 'comments.recipe_id')
            ->select('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image', \DB::raw('ROUND(AVG(comments.rating), 2) as average_rating'))
            ->groupBy('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image')
            ->whereHas('user', function ($query) {
                $query->where('email', session('email'));
            })
            ->get();
        $data = [];
        foreach ($recipes as $r) {
            $try = [];
            $try['id'] = $r->id;
            $try['name'] = $r->name;
            $try['image'] = $r->food_image ? Storage::url($r->food_image) : null; //Belum Storage $r->food_image ? Storage::url($r->food_image) : null,
            $try['user_name'] = $r->user->username;
            $try['rating'] = $r->average_rating ? $r->average_rating : 0;
            $data[] = $try;
        }
        return view('recipes', [
            'title' => 'My Recipes',
            'recipes' => $data,
        ]);
    }

    public function form()
    {
        return view('form', [
            'title' => 'Form',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function recipeDetailIndex($recipe_id)
    {
        $data = Recipe::with('user')->where('id', $recipe_id)->first();
        $comments = Comment::with('user')->where('recipe_id', $recipe_id)->get();
        if ($data) {
            $data->food_image = Storage::url($data->food_image);
        }
        $rating = 0;
        if ($comments->count() > 0) {
            $totalRating = $comments->sum('rating');
            $rating = round($totalRating / $comments->count(), 2);
        }
        $referrer = request()->headers->get('referer', 'Unknown');
        $data->rating = $rating;
        return view('recipeDetail', [
            'title' => $data->name,
            'recipe_id' => $recipe_id,
            'data' => json_encode($data),
            'comments' => json_encode($comments),
            'email' => $data->user->email,
            'refer' => $referrer,
        ]);
    }

    public function delete($recipe_id){
        $recipe = Recipe::findOrFail($recipe_id);

        // Perform deletion
        $recipe->delete();

        return response()->json(['success' => true, 'message' => 'Recipe deleted successfully!']);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestFillable = $request->all();

        $userEmail = session()->get('email');

        if (!$userEmail) {
            return response()->json(['success' => false, 'message' => 'User email not found in session.'], 400);
        }

        $user = \App\Models\User::where('email', $userEmail)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }

        $requestFillable['user_id'] = $user->id;

        // dd($requestFillable['user_id']);

        if ($request->hasFile('food_image')) {
            $foodPhoto = $request->file('food_image');
            $requestFillable['food_image'] = $foodPhoto->storePubliclyAs(
                'uploads',
                $requestFillable['name'] . '_food_image.' . $foodPhoto->getClientOriginalExtension(),
                'public'
            );
        }

        $this->modelRecipe->create($requestFillable);

        return response()->json(['success' => true, 'message' => 'Recipe added successfully.']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
