<?php

namespace App\Livewire\Panel\Inline\Layout;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return <<<'HTML'
        <nav class="navbar navbar-expand-lg mt-lg-4">
            <div class="container">
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/dashboard.svg') }}" alt="Dashboard" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/materias.svg') }}" alt="Matérias" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/locucao.svg') }}" alt="Locução" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/radio.svg') }}" alt="Rádio" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/podcasts.svg') }}" alt="Podcasts" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/marketing.svg') }}" alt="Marketing" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/midias.svg') }}" alt="Mídias" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/adms.svg') }}" alt="ADM's" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/logs.svg') }}" alt="Logs's" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                                <img src="{{ asset('icons/panel/navbar/avisos.svg') }}" alt="Avisos" />
                            </a>
                        </li>
                    </ul>
                    <div class="etc">
                        <a href="#" class="perfil">
                            <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Usuário" />
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        HTML;
    }
}
