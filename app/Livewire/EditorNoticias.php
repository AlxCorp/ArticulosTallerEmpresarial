<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class EditorNoticias extends Component
{
    public $articles;
    public $showArticleEdit = -1;

    protected $listeners = ['articleUpdated' => 'hideModal'];
    
    public function mount()
    {
        $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.editor-noticias');
    }

    public function showModal($articleId) {
        $this->showArticleEdit = $articleId;
    }

    public function hideModal() {
        $this->showArticleEdit = -1;
        $this->articles = Article::all();
    }
}
