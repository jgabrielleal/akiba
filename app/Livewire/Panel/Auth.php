<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Auth extends Component
{
    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.panel.auth')->title('Realize o Login');
    }
}
