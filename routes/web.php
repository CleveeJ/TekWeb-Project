<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;



Route::get('/',  [UserController::class, 'index'])->name('user.home');
Route::get('/login',  [UserController::class, 'login'])->name('user.login');
Route::post('/signup',  [UserController::class, 'store'])->name('user.signup');
Route::get('/processLogin',  [UserController::class, 'checkLogin'])->name('user.processLogin');
Route::get('/form',  [RecipeController::class, 'form'])->name('user.form');
Route::get('/recipes',  [RecipeController::class, 'recipes'])->name('user.recipes');

Route::post('/form/store', [RecipeController::class, 'store'])->name('recipeForm.store');

Route::get('/recipes/{recipe_id}',  [RecipeController::class, 'recipeDetailIndex'])->name('recipe.detail');