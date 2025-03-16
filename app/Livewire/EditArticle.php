<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Genre;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;


class EditArticle extends Component
{
    use WithFileUploads;

    public $article;
    public $genres = [];
    public $selectedGenres;
    public $title;
    public $content;
    public $img;
    public $filename;

    public function mount($articleId) {
        $articleId = $articleId;
        $this->article = Article::find($articleId);
        $this->genres = Genre::all();
        $this->selectedGenres = $this->article->genres->pluck('id')->toArray();

        $this->title = $this->article->title;
        $this->content = $this->article->content;
        $this->img = $this->article->img;
    }

    public function render()
    {
        return view('livewire.edit-article');
    }

    public function closeModal() {
        $this->dispatch('articleUpdated');
    }

    public function updateArticle() {
        $validatedData = $this->validate([
            'title' => [
                'required',
                'min:5',
                'max:255',
                Rule::unique('articles')->ignore($this->article->id)
            ],
            'content' => 'required',
            'genres' => 'required|array',
            'img' => 'nullable|max:2048'
        ]);


        if ($this->img != $this->article->img) {
            $this->filename = $this->article->slug.'ArticleImage.'.$this->img->getClientOriginalExtension();
            $this->img->storeAs('images',$this->filename,'public');
        } else {
            $this->filename = $this->article->img;
        }

        $this->article->update([
            'title' => $this->title,
            'content' => $this->content,
            'img' => $this->filename,
        ]);

        $this->article->genres()->sync($this->selectedGenres);
        $this->dispatch('articleUpdated', $this->article->id);
        $this->dispatch('closeModal');
    }

}
