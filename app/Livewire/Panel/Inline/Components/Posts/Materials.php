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
                <div class="image-featured">
                    <span>Imagem em destaque</span>
                    <label for="featured-image">+</label>
                    <input class="d-none" id="featured-image" name="featured-image" type="file" onchange="previewImage(event, this)">
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                <div class="title mb-3">
                    <label for="title">Título</label>
                    <input class="form-control border-0 shadow-none" id="title" name="title" type="text">
                </div>
                <div class="image-cover mb-3">
                    <span>Capa da matéria</span>
                    <label for="image-cover">+</label>
                    <input class="d-none" id="image-cover" name="image-cover" type="file" onchange="previewImage(event, this)">
                </div>
                <div class="write-article">
                    <label for="trumbowyg">Escreva sua matéria</label>
                    <textarea id="trumbowyg" name="trumbowyg"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                <div class="first-tag mb-3">
                    <label for="first-tag" class="text-center">Primeira tag</label>
                    <select id="first-tag" name="first-tag" class="form-select">
                        <option>Valor1</option>
                        <option>Valor1</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                <div class="second-tag mb-3">
                    <label for="second-tag" class="text-center">Segunda tag</label>
                    <select id="second-tag" name="second-tag" class="form-select">
                        <option>Valor1</option>
                        <option>Valor1</option>
                    </select>
                </div>
            </div>
        </div>
        </form>
        HTML;
    }
}
