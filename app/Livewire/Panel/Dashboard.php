<?php

namespace App\Livewire\Panel;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

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
        return view('livewire.panel.dashboard')->title("Dashboard");
    }
}
