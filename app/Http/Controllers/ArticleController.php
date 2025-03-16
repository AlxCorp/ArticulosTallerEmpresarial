<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Genre;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('genres')->get();
        return view('articles.index', compact('articles'));
    }

    public function create() {
        $genres = Genre::all();
        return view('articles.create', compact('genres'));
    }

    public function store(StoreArticleRequest $request) {
        $article = Article::create($request->except('genres'));
        $article->genres()->sync($request->input('genres'));
        return redirect()->route('articles.index');
    }

    public function show($article) {
        $article = Article::with('genres')->where('slug', $article)->first();
        return view('articles.show', compact('article'));
    }

    public function edit($article) {
        $genres = Genre::all();
        $article = Article::with('genres')->where('slug', $article)->first();
        $selectedGenres = $article->genres->pluck('id')->toArray();
        return view('articles.edit', compact(['genres', 'article', 'selectedGenres']));
    }

    public function update(UpdateArticleRequest $request, $id) {
        $article = Article::find($id);
        $article->update($request->except('genres'));
        $article->genres()->sync($request->input('genres'));
    }

    public function destroy($article) {
        $article = Article::where('slug', $article)->first();
        $article->delete();
        return redirect()->route('articles.index')
        ->with('success', 'Artículo eliminado correctamente');
    }

    public function favorites() {
        return view('articles.favorites');
    }
}
