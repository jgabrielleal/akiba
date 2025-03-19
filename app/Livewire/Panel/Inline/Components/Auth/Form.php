<?php

namespace App\Livewire\Panel\Inline\Components\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $username;
    public $password;
    public $error;

    public function auth()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            return $this->redirect('/painel/dashboard');
        } else {
            $this->error = 'Usuário ou senha inválidos';
        }
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            @if($error)
                <div class="alert alert-danger d-flex justify-content-center gap-1" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i> {{ $error }}
                </div>
            @endif
            <div class="block-auth p-3">
                <form wire:submit="auth">
                    <div class="mb-3">
                        <label for="username" class="form-label mb-1 d-flex gap-1">
                            <i class="bi bi-person-fill"></i>Usuário
                        </label>
                        <input type="username" class="form-control shadow-none" id="username" wire:model="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label mb-1 d-flex gap-1">
                            <i class="bi bi-key-fill"></i>Senha
                        </label>
                        <input type="password" class="form-control shadow-none" id="password" wire:model="password" required>
                    </div>
                    <div class="mb-1 d-flex justify-content-end">
                        <button class="btn border-0 shadow-none d-flex gap-1">
                            <i class="bi bi-box-arrow-in-right"></i>Entrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        HTML;
    }
}
