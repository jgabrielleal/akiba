<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Component;


class Login extends Component
{
    #[Layout('components.layouts.panel')]
    public function render()
    {
        return view('livewire.panel.login');
    }
}
