<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class EditorGeneros extends Component
{
    public $genres;
    public $showGenreCreate = false;

    protected $listeners = [
        'genreCreated' => 'genreCreated',
        'closeModal' => 'genreCreated',
    ];
    
    public function mount()
    {
        $this->genres = Genre::all();
    }

    public function render()
    {
        return view('livewire.editor-generos');
    }

    public function showCreateModal()
    {
        $this->showGenreCreate = true;
    }

    public function hideCreateModal()
    {
        $this->showGenreCreate = false;
    }

    public function genreCreated()
    {
        $this->showGenreCreate = false;
        $this->genres = Genre::all();
    }
}
