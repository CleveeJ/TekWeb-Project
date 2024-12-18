<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RecipeMiddleware;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;



Route::get('/',  [UserController::class, 'index'])->name('user.home');
Route::get('/login',  [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/signup',  [UserController::class, 'store'])->name('user.signup');
Route::get('/processLogin',  [UserController::class, 'checkLogin'])->name('user.processLogin');
Route::get('/form',  [RecipeController::class, 'form'])->name('user.form')->middleware(RecipeMiddleware::class);
Route::get('/recipes',  [RecipeController::class, 'recipes'])->name('user.recipes');

Route::get('/my-recipes',  [RecipeController::class, 'myrecipes'])->name('user.myrecipes')->middleware(RecipeMiddleware::class);

Route::post('/form/store', [RecipeController::class, 'store'])->name('recipeForm.store');

Route::get('/recipes/{recipe_id}',  [RecipeController::class, 'recipeDetailIndex'])->name('recipe.detail')->middleware(RecipeMiddleware::class);
Route::post('/recipes/{recipe_id}', [CommentController::class, 'store'])->name('comment.store');
Route::delete('/recipes/{recipe_id}', [RecipeController::class, 'delete'])->name('comment.store');