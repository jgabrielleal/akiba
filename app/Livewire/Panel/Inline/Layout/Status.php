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
                        <section class="status d-flex">
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/kbps.svg') }}" alt="kbps">
                                <span class="d-block text-uppercase">320kbps</span>
                            </div>
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/transmissao.svg') }}" alt="transmissão">
                                <span class="d-block text-uppercase">Ligado</span>
                            </div>
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/ouvintes.svg') }}" alt="ouvintes">
                                <span class="d-block text-uppercase">500 ouvintes</span>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        HTML;
    }
}
