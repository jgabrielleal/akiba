<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use Livewire\Component;

class LastPosts extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                <section class="last-posts mb-5">
                    <div class="title-default">
                        <h1>Últimas matérias</h1>
                    </div>
                    <div class="last-posts-carrousel gap-2">
                        <div class="last-posts-item">
                            <p class="last-posts-title">
                                It is a long established fact that a reader 
                                will be distracted by the readable content 
                                of a page when looking at its layout. The point 
                                of using Lorem Ipsum is that it has a more-or-less 
                                normal distribution of letters, as opposed to 
                                using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages 
                                and web page editors now use Lorem Ipsum as their 
                                default model text, and a search for 'lorem ipsum' will 
                                uncover many web sites still in their infancy. Various 
                                versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="last-posts-author d-flex justify-content-between">
                                <span class="d-block text-uppercase">
                                    Neko Kirame
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="last-posts-item">
                            <p class="last-posts-title">
                                It is a long established fact that a reader 
                                will be distracted by the readable content 
                                of a page when looking at its layout. The point 
                                of using Lorem Ipsum is that it has a more-or-less 
                                normal distribution of letters, as opposed to 
                                using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages 
                                and web page editors now use Lorem Ipsum as their 
                                default model text, and a search for 'lorem ipsum' will 
                                uncover many web sites still in their infancy. Various 
                                versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="last-posts-author d-flex justify-content-between">
                                <span class="d-block text-uppercase">
                                    Neko Kirame
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="last-posts-item">
                            <p class="last-posts-title">
                                It is a long established fact that a reader 
                                will be distracted by the readable content 
                                of a page when looking at its layout. The point 
                                of using Lorem Ipsum is that it has a more-or-less 
                                normal distribution of letters, as opposed to 
                                using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages 
                                and web page editors now use Lorem Ipsum as their 
                                default model text, and a search for 'lorem ipsum' will 
                                uncover many web sites still in their infancy. Various 
                                versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="last-posts-author d-flex justify-content-between">
                                <span class="d-block text-uppercase">
                                    Neko Kirame
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="last-posts-item">
                            <p class="last-posts-title">
                                It is a long established fact that a reader 
                                will be distracted by the readable content 
                                of a page when looking at its layout. The point 
                                of using Lorem Ipsum is that it has a more-or-less 
                                normal distribution of letters, as opposed to 
                                using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages 
                                and web page editors now use Lorem Ipsum as their 
                                default model text, and a search for 'lorem ipsum' will 
                                uncover many web sites still in their infancy. Various 
                                versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="last-posts-author d-flex justify-content-between">
                                <span class="d-block text-uppercase">
                                    Neko Kirame
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="last-posts-item">
                            <p class="last-posts-title">
                                It is a long established fact that a reader 
                                will be distracted by the readable content 
                                of a page when looking at its layout. The point 
                                of using Lorem Ipsum is that it has a more-or-less 
                                normal distribution of letters, as opposed to 
                                using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages 
                                and web page editors now use Lorem Ipsum as their 
                                default model text, and a search for 'lorem ipsum' will 
                                uncover many web sites still in their infancy. Various 
                                versions have evolved over the years, sometimes by accident, 
                                sometimes on purpose (injected humour and the like).
                            </p>
                            <div class="last-posts-author d-flex justify-content-between">
                                <span class="d-block text-uppercase">
                                    Neko Kirame
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                    </a>
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
