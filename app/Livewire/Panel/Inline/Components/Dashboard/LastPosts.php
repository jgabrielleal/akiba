<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use App\Models\Posts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LastPosts extends Component
{
    public function get_all_posts()
    {
        $posts = Posts::with('author')->take(5)->get();
        return $posts->toArray();
    }

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
                        @for($i = 0; $i < count($this->get_all_posts()); $i++)
                            <div class="last-posts-item">
                                <p class="last-posts-title">
                                    {{ $this->get_all_posts()[$i]['title'] }}
                                </p>
                                <div class="last-posts-author d-flex justify-content-between">
                                    <span class="d-block text-uppercase">
                                        {{ $this->get_all_posts()[$i]['author']['nickname'] }}
                                    </span>
                                    <div class="d-flex gap-2">
                                        <a href="https://akiba.com.br/materia/{{ $this->get_all_posts()[$i]['slug'] }}" target="_blank">
                                            <img src="{{ asset('icons/panel/visualizar.svg') }}" alt="Editar"/>
                                        </a>
                                        @if(Auth::user()->id == $this->get_all_posts()[$i]['author']['id'])
                                            <a href="https://akiba.com.br/painel/materia/{{ $this->get_all_posts()[$i]['slug'] }}">
                                                <img src="{{ asset('icons/panel/editar.svg') }}" alt="Editar"/>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </section>
            </div>
        </div>
        HTML;
    }
}
