<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\modelRecipe;

class RecipeController extends Controller
{
    protected $modelRecipe;

    public function __construct(Recipe $modelRecipe)
    {
        $this->modelRecipe = $modelRecipe;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function recipeDetailIndex()
    {
        return view('recipeDetail', [
            'title' => 'Details',
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
