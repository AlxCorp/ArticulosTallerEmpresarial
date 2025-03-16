<?php

namespace App\Livewire;

use Livewire\Component;

class EditorTabSwitcher extends Component
{
    public $selectedTab = 'noticias';

    public function selectTab($tab)
    {
        $this->selectedTab = $tab;
    }

    public function render()
    {
        return view('livewire.editor-tab-switcher');
    }
}
