<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Dashboard')]

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
        return view('livewire.panel.dashboard', [
            'logged' => $this->logged
        ]);
    }
}
