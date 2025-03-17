<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class ArticleWithGenre extends Component
{
    public $genre;
    public $articles;

    public function mount($genreId)
    {
        $this->genre = Genre::find($genreId);
        $this->articles = $this->genre->articles()->get();
    }

    public function render()
    {
        return view('livewire.article-with-genre');
    }

    public function hideModal() {
        $this->dispatch('closeArticlesModal');
    }
}
