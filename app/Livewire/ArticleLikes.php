<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleLikes extends Component
{
    public $article;
    public $likes;

    public function mount($articleId)
    {
        $this->article = Article::find($articleId);
        $this->likes = $this->article->users()->get();
    }

    public function render()
    {
        return view('livewire.article-likes');
    }

    public function hideModal() {
        $this->dispatch('likes');
    }
}
