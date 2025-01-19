<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class Calendario extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="calendario mb-5">
                    <div class="title-default">
                        <h1>Calendário</h1>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
