<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class EditGenre extends Component
{
    public $genre;
    public $name;
    public $description;

    public function mount($genreId) {
        $this->genre = Genre::find($genreId);
        $this->name = $this->genre->name;
        $this->description = $this->genre->description;

    }

    public function render()
    {
        return view('livewire.edit-genre');
    }

    public function closeModal() {
        $this->dispatch('closeEditModal');
    }

    public function updateGenre() {
        $this->genre->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->dispatch('genreEdited');
    }
}
