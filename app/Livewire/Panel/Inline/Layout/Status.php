<?php

namespace App\Livewire\Panel\Inline\Layout;

use Livewire\Component;

class Status extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="position-fixed bottom-0 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section class="status">
                            teste
                        </section>
                    </div>
                </div>
            </div>
        </div>
        HTML;
    }
}
