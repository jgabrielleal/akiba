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
                <section class="acoes-rapidas mb-4">
                    <div class="title-default">
                        <h1>Ações Rápidas</h1>
                    </div>
                    <div class="acoes-rapidas-carrousel d-flex gap-2 mt-1">
                        <button type="button" class="btn d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/acoes_rapidas/adicionar_materias.svg') }}" alt="Adicionar Matérias" />Nova Matéria
                        </button>
                        <button type="button" class="btn d-flex align-items-center gap-1">
                            <img src="{{ asset('icons/panel/acoes_rapidas/adicionar_avisos.svg') }}" alt="Adicionar Avisos" />Criar Avisos
                        </button>
                        <button type="button" class="btn d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/acoes_rapidas/enviar_arquivo.svg') }}" alt="Enviar Arquivo" />Deixar Arquivos
                        </button>
                        <button type="button" class="btn d-flex align-items-center gap-1">
                            <img src="{{ asset('icons/panel/acoes_rapidas/iniciar_programa.svg') }}" alt="Iniciar Programa" />Iniciar Programa
                        </button>
                        <button type="button" class="btn d-flex align-items-center gap-2">
                            <img src="{{ asset('icons/panel/acoes_rapidas/adicionar_eventos.svg') }}" alt="Adicionar Eventos" />Adicionar Eventos
                        </button>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
