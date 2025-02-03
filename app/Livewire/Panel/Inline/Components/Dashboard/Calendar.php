<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class Calendar extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="calendar">
                    <div class="title-default">
                        <h1>Calendário</h1>
                    </div>
                    <div class="calendar-tags d-flex gap-2">
                        <div class="calendar-tags-item text-uppercase">
                            Programas
                        </div>
                        <div class="calendar-tags-item text-uppercase">
                            Lives
                        </div>
                        <div class="calendar-tags-item text-uppercase">
                            Youtube
                        </div>
                        <div class="calendar-tags-item text-uppercase">
                            Podcast
                        </div>
                        <div class="calendar-tags-item text-uppercase">
                        </div>
                        <div class="calendar-tags-item text-uppercase">
                        </div>                        
                        <div class="calendar-tags-item text-uppercase">
                        </div>
                    </div>
                    <div class="calendar-days d-flex gap-2 mt-4">
                        <div class="calendar-days-item text-center text-uppercase d-block">Dom</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Seg</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Ter</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Qua</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Qui</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Sex</div>
                        <div class="calendar-days-item text-center text-uppercase d-block">Sab</div>
                    </div>
                    <div class="calendar-tasks d-flex gap-2 mt-3">
                        <div class="calendar-tasks-columns">
                            <div class="calendar-tasks-item">
                                <span>8:00H</span>
                                <h1>Revolução Otaku</h1>
                                <span>Roger Ventura</span>
                            </div>
                        </div>
                        <div class="calendar-tasks-columns">
                        </div>
                        <div class="calendar-tasks-columns">
                            <div class="calendar-tasks-item">
                                <span>20:00H</span>
                                <h1>Porão da Mia Nee</h1>
                                <span>Takashi</span>
                            </div>
                            <div class="calendar-tasks-item-youtube">
                                <span>8:00H</span>
                                <h1>Vídeo de Gameplay</h1>
                                <span>Saiko</span>
                            </div>
                        </div>
                        <div class="calendar-tasks-columns">
                        </div>
                        <div class="calendar-tasks-columns">
                            <div class="calendar-tasks-item-youtube">
                                <span>08:00H</span>
                                <h1>Vídeo explicando palavras</h1>
                                <span>NHK</span>
                            </div>
                        </div>
                        <div class="calendar-tasks-columns">
                            <div class="calendar-tasks-item">
                                <span>22:00H</span>
                                <h1>Plantão Ecchi</h1>
                                <span>Takashi </span>
                            </div>
                        </div>
                        <div class="calendar-tasks-columns">
                            <div class="calendar-tasks-item-podcast">
                                <span>5:00H</span>
                                <h1>Gravação tema Qual de vocês assistiu mais anime?</h1>
                                <span>Neko Kirame</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
