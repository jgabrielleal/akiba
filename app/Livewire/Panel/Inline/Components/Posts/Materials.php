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
                        <label for="featured-image">+</label>
                        <input class="d-none" id="featured-image" name="featured-image" type="file" onchange="previewImage(event, this)">
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xxl-3">

            </div>
        </form>
        HTML;
    }
}
