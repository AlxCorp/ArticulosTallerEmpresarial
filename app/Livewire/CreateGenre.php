<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class CreateGenre extends Component
{
    public $name;
    public $description;

    public function render()
    {
        return view('livewire.create-genre');
    }

    public function closeModal() {
        $this->dispatch('closeModal');
    }

    public function createGenre() {
        Genre::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->dispatch('genreCreated');
    }

}
