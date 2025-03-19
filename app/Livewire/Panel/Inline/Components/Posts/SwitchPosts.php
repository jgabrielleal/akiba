<?php

namespace App\Livewire\Panel\Inline\Components\Posts;

use Livewire\Component;

class SwitchPosts extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="switch-posts mb-5">
                    <div class="title-default">
                        <h1>Matérias</h1>
                    </div>
                    <div class="d-flex justify-content-center gap-1">
                        
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
