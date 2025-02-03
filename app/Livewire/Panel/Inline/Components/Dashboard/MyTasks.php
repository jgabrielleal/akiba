<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class MyTasks extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="my-tasks mb-5">
                    <div class="title-default">
                        <h1>Minhas Tarefas</h1>
                    </div>
                    <div class="my-tasks-carrousel gap-3">
                        <div class="my-tasks-item">
                            <div class="my-tasks-content">
                                <h1 class="text-uppercase">A tarefa não foi concluída</h1>
                                <p>
                                    It is a long established fact that a reader will be distracted by 
                                    the readable content of a page when looking at its layout. The point 
                                    of using Lorem Ipsum is that it has a more-or-less normal distribution 
                                    of letters, as opposed to using 'Content here, content here', making 
                                    it look like readable English. Many desktop publishing packages and 
                                    web page editors now use Lorem Ipsum as their default model text, 
                                    and a search for 'lorem ipsum' will uncover many web sites still in 
                                    their infancy. Various versions have evolved over the years, sometimes 
                                    by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                            <div class="my-tasks-dates-and-completion">
                                <div class="calendar">
                                    <span class="calendar-top d-block text-uppercase d-flex align-items-center justify-content-center">
                                        Data Limite
                                    </span>
                                    <span class="calendar-content d-block text-uppercase d-flex align-items-center justify-content-center">
                                        10/05
                                    </span>
                                </div>
                                <div class="my-tasks-confirmations">
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="my-tasks-expirations">
                            <div class="my-tasks-content">
                                <h1 class="text-uppercase">A tarefa não foi concluída</h1>
                                <p>
                                    It is a long established fact that a reader will be distracted by 
                                    the readable content of a page when looking at its layout. The point 
                                    of using Lorem Ipsum is that it has a more-or-less normal distribution 
                                    of letters, as opposed to using 'Content here, content here', making 
                                    it look like readable English. Many desktop publishing packages and 
                                    web page editors now use Lorem Ipsum as their default model text, 
                                    and a search for 'lorem ipsum' will uncover many web sites still in 
                                    their infancy. Various versions have evolved over the years, sometimes 
                                    by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                            <div class="my-tasks-dates-and-completion">
                                <div class="calendar">
                                    <span class="calendar-top d-block text-uppercase d-flex align-items-center justify-content-center">
                                        Data Limite
                                    </span>
                                    <span class="calendar-content d-block text-uppercase d-flex align-items-center justify-content-center">
                                        10/05
                                    </span>
                                </div>
                                <div class="my-tasks-confirmations">
                                    <button class="btn">
                                        Solicitar conclusão
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
