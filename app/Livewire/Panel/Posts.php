<?php

namespace App\Livewire\Panel;

use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.panel.posts')->layout('components.layouts.app');
    }
}
