<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;



Route::get('/',  [UserController::class, 'index'])->name('user.home');
Route::get('/login',  [UserController::class, 'login'])->name('user.login');
Route::get('/form',  [UserController::class, 'form'])->name('user.form');

Route::post('/form/store', [RecipeController::class, 'store'])->name('recipeForm.store');