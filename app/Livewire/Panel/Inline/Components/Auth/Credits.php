<?php

namespace App\Livewire\Panel\Inline\Components\Auth;

use Livewire\Component;

class Credits extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="block-credits text-center">
            Rede Akiba © 2016 - <?php echo date('Y'); ?> <br />
            Aki Panel v1.0.0
        </div>
        HTML;
    }
}
