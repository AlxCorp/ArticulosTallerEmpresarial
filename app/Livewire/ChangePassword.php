<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ChangePassword extends Component
{
    public $user;
    public $password;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function render()
    {
        return view('livewire.change-password');
    }

    public function closeModal()
    {
        $this->dispatch('passwordUpdated');
    }

    public function changePassword()
    {
        $this->user->update([
            'password' => $this->password
        ]);
        $this->dispatch('passwordUpdated');
    }
}
