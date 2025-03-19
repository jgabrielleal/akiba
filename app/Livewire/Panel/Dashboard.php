<?php

namespace App\Livewire\Panel;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Dashboard extends Component
{
    
    public $logged;
    
    public function mount()
    {
        if (!Auth::check()) {
            return $this->redirect('/painel', navigate: true);
        }
        $this->logged = Auth::user();
    }
    
    public function render()
    {
        return view('livewire.panel.dashboard')->title("Dashboard")->layout('components.layouts.app');
    }
}
