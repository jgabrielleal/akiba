<?php

namespace App\Livewire\Panel\Inline\Components\Posts;

use Livewire\Component;

class Materials extends Component
{
    public function render()
    {
        return <<<'HTML'
        <form>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xxl-3">
                    <div class="featured-image">
                        <span>Imagem em destaque</span>
                        <label>+</label>
                    </div>
                </div>
            </div>
        </form>
        HTML;
    }
}
