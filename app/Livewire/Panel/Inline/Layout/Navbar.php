<?php

namespace App\Livewire\Panel\Inline\Layout;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $avatar;

    public function mount()
    {
       if(Auth::user()->avatar){
            $this->avatar = Auth::user()->avatar;
       }else{
            $this->avatar = "https://i.pinimg.com/736x/ce/5f/69/ce5f699887b75fa38904635e0fe60dbb.jpg";  
       }
    }

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
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="/painel/dashboard" wire:navigate>
                                <img src="{{ asset('icons/panel/dashboard.svg') }}" alt="Dashboard" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="/painel/materias" wire:navigate>
                                <img src="{{ asset('icons/panel/materias.svg') }}" alt="Matérias" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/locucao.svg') }}" alt="Locução" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/radio.svg') }}" alt="Rádio" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/podcasts.svg') }}" alt="Podcasts" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/marketing.svg') }}" alt="Marketing" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/midias.svg') }}" alt="Mídias" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/adms.svg') }}" alt="ADM's" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/logs.svg') }}" alt="Logs's" />
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#" wire:navigate>
                                <img src="{{ asset('icons/panel/avisos.svg') }}" alt="Avisos" />
                            </a>
                        </li>
                    </ul>
                    <div class="nav-additional">
                        <a href="#" class="profile">
                            <img src="{{ $this->avatar }}" alt="Usuário" />
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        HTML;
    }
}
