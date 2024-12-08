<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
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
        $recipes = Recipe::get(); //Recipe::with('user')->get();
        $data = [];
        foreach ($recipes as $r) {
            $try = [];
            $try['id'] = $r->id;
            $try['name'] = $r->name;
            $try['image'] = $r->food_image ? Storage::url($r->food_image) : null; //Belum Storage $r->food_image ? Storage::url($r->food_image) : null,
            $try['user_name'] = $r->user->username;
            $data[] = $try;
        }
        return view('recipes', [
            'title' => 'All Recipes',
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
        if ($data) {
            $data->food_image = Storage::url($data->food_image);
        }
        return view('recipeDetail', [
            'title' => $data->name,
            'data' => json_encode($data),
        ]);
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

        //dd($requestFillable);

        // Check for and store the uploaded files
        if ($request->hasFile('food_image')) {
            $foodPhoto = $request->file('food_image');
            $requestFillable['food_image'] = $foodPhoto->storePubliclyAs('uploads', $requestFillable['name'] . '_food_image.' . $foodPhoto->getClientOriginalExtension(), 'public');
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
