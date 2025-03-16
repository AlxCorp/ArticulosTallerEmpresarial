<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class EditorGeneros extends Component
{
    public $genres;
    
    public function mount()
    {
        $this->genres = Genre::all();
    }

    public function render()
    {
        return view('livewire.editor-generos');
    }
}
