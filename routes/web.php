<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])
    ->middleware('roleBasedRedirect');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->middleware('roleBasedRedirect');

    Route::resource('articles', ArticleController::class)
    ->names('articles');

    Route::get('/editor', [EditorController::class, 'index'])->name('editor.index');

    Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');

});

require __DIR__.'/auth.php';
