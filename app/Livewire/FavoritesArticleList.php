<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\User;

class FavoritesArticleList extends Component
{
    public $favorites;
    
    public function mount()
    {
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

        $this->favorites = $user->favorites()->get();
    }

    public function render()
    {
        return view('livewire.favorites-article-list');
    }
}
