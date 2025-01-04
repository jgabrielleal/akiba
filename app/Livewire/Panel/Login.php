<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Layout('components.layouts.login')]
    #[Title('Realize o Login')]

    public $username;
    public $password;

    public function auth()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            return $this->redirect('/painel/dashboard', navigate: true);
        } else {
            session()->flash('error', 'Login ou senha incorretos');
        }
    }

    public function render()
    {
        return view('livewire.panel.login');
    }
}
