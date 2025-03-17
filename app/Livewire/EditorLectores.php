<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditorLectores extends Component
{
    public $readers;
    public $showChangePassword = -1;

    protected $listeners = [
        'passwordUpdated' => 'hideChangePasswordModal',
    ];
    
    public function mount()
    {
        $this->readers = User::where('role', 'reader')->get();
    }

    public function render()
    {
        return view('livewire.editor-lectores');
    }

    public function showChangePasswordModal($userId)
    { 
        $this->showChangePassword = $userId;
    }

    public function hideChangePasswordModal()
    {
        $this->showChangePassword = -1;
    }
}
