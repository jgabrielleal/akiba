<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    #[Layout('components.layouts.panel')]
    #[Title('Dashboard')]

    public function mount()
    {
        if (!Auth::check()) {
            return $this->redirect('/painel', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.panel.dashboard');
    }
}
