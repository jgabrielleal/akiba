<?php

namespace App\Livewire\Panel\Inline\Dashboard;

use Livewire\Component;

class AcoesRapidas extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="acoes-rapidas">
                    <div class="title-default">
                        <h1>Ações Rápidas</h1>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
