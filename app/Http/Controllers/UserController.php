<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($user) {
        // $genres = Genre::all();
        // $article = Article::with('genres')->where('slug', $article)->first();
        // $selectedGenres = $article->genres->pluck('id')->toArray();
        // return view('articles.edit', compact(['genres', 'article', 'selectedGenres']));
    }
}
