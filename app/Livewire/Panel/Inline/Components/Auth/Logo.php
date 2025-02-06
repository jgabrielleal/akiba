<?php

namespace App\Livewire\Panel\Inline\Components\Auth;

use Livewire\Component;

class Logo extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="block-logo d-flex justify-content-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
        </div>
        HTML;
    }
}
