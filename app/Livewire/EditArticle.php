<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Genre;

class EditArticle extends Component
{
    public $article;
    public $articleId;
    public $genres;
    public $selectedGenres;

    public function mount($articleId) {
        $this->articleId = $articleId;
        $this->article = Article::find($articleId);
        $this->genres = Genre::all();
        $this->selectedGenres = $this->article->genres->pluck('id')->toArray();
    }

    public function render()
    {
        return view('livewire.edit-article');
    }

    public function closeModal() {
        $this->dispatch('articleUpdated');
    }
}
