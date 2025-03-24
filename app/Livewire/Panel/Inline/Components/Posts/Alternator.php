<?php

namespace App\Livewire\Panel\Inline\Components\Posts;

use Livewire\Component;

class Alternator extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="alternator mb-5">
                    <div class="title-default">
                        <h1>Matérias</h1>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" title="matéria">
                            <button class="button-posts">
                                Matéria
                            </button>
                        </a>
                        <a href="#" title="reviews">
                            <button class="button-reviews">
                                Review
                            </button>
                        </a>
                        <a href="#" title="eventos">
                            <button class="button-eventos">
                                Eventos
                            </button>
                        </a>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
