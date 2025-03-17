<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class GenresList extends Component
{
    public $genres;
    public $selectedGenre = null;
    public $articles = [];

    public function mount()
    {
        $this->genres = Genre::all();
    }

    public function showArticles($genreId)
    {
        if ($this->selectedGenre === $genreId) {
            $this->selectedGenre = null;
            $this->articles = [];
        } else {
            $this->selectedGenre = $genreId;
            $this->articles = Genre::find($genreId)->articles()->get();
        }
    }

    public function render()
    {
        return view('livewire.genres-list');
    }
}
