<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class Calendario extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="calendario mb-5">
                    <div class="title-default">
                        <h1>Calendário</h1>
                    </div>
                    <div class="calendario-tags d-flex gap-2">
                        <div class="calendario-tags-item text-uppercase">
                            Programas
                        </div>
                        <div class="calendario-tags-item text-uppercase">
                            Lives
                        </div>
                        <div class="calendario-tags-item text-uppercase">
                            Youtube
                        </div>
                        <div class="calendario-tags-item text-uppercase">
                            Podcast
                        </div>
                        <div class="calendario-tags-item text-uppercase">
                        </div>
                        <div class="calendario-tags-item text-uppercase">
                        </div>                        
                        <div class="calendario-tags-item text-uppercase">
                        </div>
                    </div>
                    <div class="calendario-dias d-flex gap-2 mt-4">
                        <div class="calendario-dias-item text-center text-uppercase d-block">Dom</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Seg</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Ter</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Qua</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Qui</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Sex</div>
                        <div class="calendario-dias-item text-center text-uppercase d-block">Sab</div>
                    </div>
                    <div class="calendario-tarefas d-flex gap-2 mt-3">
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendario-tarefas-coluna">
                            <div class="calendario-tarefas-item">
                                <span>08H00</span>
                                <h1>Revolução Anime</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
