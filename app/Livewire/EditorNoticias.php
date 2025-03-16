<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class EditorNoticias extends Component
{
    public $articles;
    
    public function mount()
    {
        $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.editor-noticias');
    }
}
