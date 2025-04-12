<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Models\Category;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);