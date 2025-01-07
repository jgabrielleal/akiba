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
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-layers-fill"></i>Nova Matéria
                        </button>
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-bell-fill"></i>Criar Avisos
                        </button>
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-cloud-upload-fill"></i>Deixar Arquivos
                        </button>
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-mic-fill"></i>Iniciar Programa
                        </button>
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-calendar-day-fill"></i>Adicionar Eventos
                        </button>
                        <button type="button" class="btn d-flex gap-1">
                            <i class="bi bi-music-note-list"></i>Caixa de Pedidos
                        </button>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
