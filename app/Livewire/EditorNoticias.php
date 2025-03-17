<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class EditorNoticias extends Component
{
    public $articles;
    public $showArticleEdit = -1;
    public $showArticleCreate = false;
    public $showLikes = -1;

    protected $listeners = [
        'articleUpdated' => 'hideModal',
        'articleCreated' => 'hideCreateModal',
        'likes' => 'hideLikes',
    ];
    
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

    public function showCreateModal() {
        $this->showArticleCreate = true;
    }
    
    public function showLikes($articleId) {
        $this->showLikes = $articleId;
    }

    public function hideModal() {
        $this->showArticleEdit = -1;
        $this->articles = Article::all();
    }

    public function hideCreateModal() {
        $this->showArticleCreate = false;
        $this->articles = Article::all();
    }

    public function delete($articleId) {
        $article = Article::find($articleId);
        $article->delete();
        $this->articles = Article::all();
    }

    public function hideLikes() {
        $this->showLikes = -1;
        $this->articles = Article::all();
    }
}
