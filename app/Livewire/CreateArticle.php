<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Genre;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $genres = [];
    public $selectedGenres = [];
    public $title;
    public $content;
    public $img;
    public $filename;

    public function mount()
    {
        $this->genres = Genre::all();
    }

    public function render()
    {
        return view('livewire.create-article');
    }

    public function closeModal() {
        $this->dispatch('articleCreated');
    }

    public function createArticle()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:5|max:255|unique:articles,title',
            'content' => 'required',
            'selectedGenres' => 'required|array',
            'img' => 'nullable|image|max:2048', 
        ]);

        $slug = Str::slug($this->title);

        if ($this->img) {
            $this->filename = $slug.'ArticleImage.'.$this->img->getClientOriginalExtension();
            $this->img->storeAs('images',$this->filename,'public');
        }

        $article = Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'img' => $this->filename ?? null,
            'slug' => $slug,
        ]);

        $article->genres()->attach($this->selectedGenres);

        session()->flash('message', 'Artículo creado con éxito');
        $this->dispatch('articleCreated', $article->id);
        $this->dispatch('closeModal');
    }
}
