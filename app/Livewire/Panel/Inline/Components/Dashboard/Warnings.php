<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class Warnings extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="warnings mb-5">
                    <div class="title-default">
                        <h1>warnings para a akiba</h1>
                    </div>
                    <div class="warnings-carrousel gap-3">
                    <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="warnings-item">
                            <h1 class="warnings-sender text-uppercase">Takashi >> Equipe</h1>
                            <p class="warnings-message">
                                It is a long established fact that a reader will be distracted by the readable 
                                content of a page when looking at its layout. The point of using Lorem Ipsum is 
                                that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem Ipsum as their default 
                                model text, and a search for 'lorem ipsum' will uncover many web sites still in 
                                their infancy. Various versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="warnings-peoples-confirmations d-flex gap-2">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                    <img src="https://static.gameloop.com/img/8e93daa12129f25a8bf60eab3ae86c7b.png?imageMogr2/thumbnail/172.8x172.8/format/webp" alt="Avatar do colaborador" class="avatar">
                                </div>
                                <div class="warnings-buttons-confirmations d-flex gap-1">
                                    <button>
                                        <img src="{{ asset('icons/panel/negar.svg') }}" alt="Negar"/>
                                    </button>
                                    <button>
                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
