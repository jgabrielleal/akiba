<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Layout;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.login')]
class Login extends Component
{
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
        return view('livewire.panel.login')->title("Realize o login");
    }
}
