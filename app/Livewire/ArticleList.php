<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\User;

class ArticleList extends Component
{
    public $articles;
    public $favorites;
    
    public function mount()
    {
        $this->articles = Article::all();
        $user = auth()->user();
        $this->favorites = $user->favorites()->get();
    }

    public function toggleFavorite($articleId)
    {
        $user = auth()->user();
        $article = Article::find($articleId);

        if (!$article) {
            return;
        }

        $isFav = $user->favorites()->where('article_id', $articleId)->exists();

        if ($isFav) {
            $user->favorites()->detach($articleId);
        } else {
            $user->favorites()->attach($articleId);
        }

        $this->articles = Article::all();
        $this->favorites = $user->favorites()->get();
    }

    public function render()
    {
        return view('livewire.article-list');
    }
}
