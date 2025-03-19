<?php

namespace App\Livewire\Panel;

use Livewire\Component;

class Auth extends Component
{
    #[Layout('components.layouts.panel.auth')]
    public function render()
    {
        return view('livewire.panel.auth')->title('Realize o Login')->layout('components.layouts.app');
    }
}
