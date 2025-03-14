<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleCard extends Component
{
    public $slug;
    public $img;
    public $title;
    public $summary;
    public $favorite = false;

    public function favorite() {
        $this->favorite = !$this->favorite;
    }

    public function render()
    {
        return view('livewire.article-card');
    }
}
