<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BoasVindas extends Component
{
    public $nickname;

    public function mount()
    {
        $this->nickname = Auth::user()->nickname;
    }

    public function render()
    {
        return <<<'HTML'
        <div class="row d-flex justify-content-center">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                @if($this->nickname)
                <section class="boasVindas mb-5">
                    E aí {{$this->nickname}}, O que tem pra hoje?
                </section>
                @else
                <section class="boasVindas mb-5">
                    Quem é você? Não te conheço!
                </section>
                @endif
            </div>
        </div>
        HTML;
    }
}
