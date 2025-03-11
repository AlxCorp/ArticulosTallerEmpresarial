<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index'])->middleware('roleBasedRedirect');

Route::resource('articles', ArticleController::class)
    ->names('articles');

require __DIR__.'/auth.php';
