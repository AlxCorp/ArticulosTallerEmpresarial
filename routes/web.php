<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditorController;

Route::middleware('roleBasedRedirect')
    ->get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class)->names('articles');
   
    Route::get('/favorites', [ArticleController::class, 'favorites'])->name('articles.favorites');
    Route::get('/genres', [ArticleController::class, 'genres'])->name('articles.genres');

    Route::get('/editor', [EditorController::class, 'index'])->name('editor.index');

    Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [UserController::class, 'update'])->name('profile.update');

});

require __DIR__.'/auth.php';
