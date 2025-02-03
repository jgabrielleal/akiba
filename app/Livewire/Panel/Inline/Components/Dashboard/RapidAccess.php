<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class RapidAccess extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="acoes-rapidas mb-5">
                    <div class="acoes-rapidas-carrousel d-flex justify-content-center gap-2 mt-1">
                        <button type="button" class="d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/adicionar_materias.svg') }}" alt="Adicionar Matérias" />Nova Matéria
                        </button>
                        <button type="button" class="d-flex align-items-center gap-1">
                            <img src="{{ asset('icons/panel/adicionar_avisos.svg') }}" alt="Adicionar Avisos" />Criar avisos
                        </button>
                        <button type="button" class="d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/enviar_arquivo.svg') }}" alt="Enviar Arquivo" />Deixar Arquivos
                        </button>
                        <button type="button" class="d-flex align-items-center gap-1">
                            <img src="{{ asset('icons/panel/iniciar_programa.svg') }}" alt="Iniciar Programa" />Iniciar Programa
                        </button>
                        <button type="button" class="d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/adicionar_eventos.svg') }}" alt="Adicionar Eventos" />Adicionar Eventos
                        </button>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
