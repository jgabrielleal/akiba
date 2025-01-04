<main class="login">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 col-xl-3 col-xxl-3">
                <div class="block-logo d-flex justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                </div>
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
                @if (session()->has('error'))
                    <div class="alert alert-danger d-flex gap-1 justify-content-center">
                        <i class="bi bi-exclamation-triangle"></i>{{ session('error') }}
                    </div>
                @endif
                <div class="block-footer text-center">
                    Rede Akiba © 2016 - <?php echo date('Y'); ?> <br />
                    Aki Panel v1.0.0
                </div>
            </div>
        </div>
    </div>
</main>