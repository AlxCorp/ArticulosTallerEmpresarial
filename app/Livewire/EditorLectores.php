<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditorLectores extends Component
{
    public $readers;
    
    public function mount()
    {
        $this->readers = User::where('role', 'reader')->get();
    }

    public function render()
    {
        return view('livewire.editor-lectores');
    }
}
