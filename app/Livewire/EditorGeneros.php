<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class EditorGeneros extends Component
{
    public $genres;
    public $showGenreCreate = false;
    public $showGenreEdit = -1;

    protected $listeners = [
        'genreCreated' => 'genreCreated',
        'closeModal' => 'genreCreated',
        'closeEditModal' => 'hideEditedModal',
        'genreEdited' => 'genreEdited',
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

    public function showEditedModal($genreId)
    {
        $this->showGenreEdit = $genreId;
    }

    public function hideEditedModal()
    {
        $this->showGenreEdit = -1;
    }

    public function genreEdited()
    {
        $this->showGenreEdit = -1;
        $this->genres = Genre::all();
    }

    public function delete($genreId) {
        $genre = Genre::find($genreId);
        $genre->delete();
        $this->genres = Genre::all();
    }
}
