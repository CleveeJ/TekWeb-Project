<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/',  [UserController::class, 'index'])->name('user.home');
Route::get('/login',  [UserController::class, 'login'])->name('user.login');
