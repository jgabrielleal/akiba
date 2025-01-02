<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Login extends Component
{
    #[Layout('components.layouts.panel')]
    #[Title('Realize o Login')]
    public function render()
    {
        return view('livewire.panel.login');
    }
}
