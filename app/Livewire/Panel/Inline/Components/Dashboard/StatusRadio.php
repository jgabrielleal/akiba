<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class StatusRadio extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div className="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="status-radio">
                    <div class="title-default">
                        <h1>Status da Rádio</h1>
                    </div> 
                    <div class="status-radio-carrousel">
                        <div class="status-radio-item d-flex gap-2 align-items-center">
                            <i class="bi bi-soundwave"></i>320 KBPS
                        </div>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
