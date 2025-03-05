<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use App\Models\User;
use App\Models\Warning;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Warnings extends Component
{
    public function list_all()
    {
        $warnings = Warning::with('sender')->get();
        $warnings = $warnings->map(function ($warning) {
            $avatars = [];
            foreach ($warning['receivers'] as $receiver) {
                $user = User::find($receiver);
                if (!empty($user->avatar)) {
                    $avatars[] = $user->avatar;
                } else {
                    $avatars[] = "https://i.pinimg.com/736x/ce/5f/69/ce5f699887b75fa38904635e0fe60dbb.jpg";
                }
            }

            $warning->participating = in_array(Auth::user()->id, $warning['receivers']);
            $warning->avatars = array_slice($avatars, 0, 5);

            return $warning;
        });
        
        return $warnings->toArray();
    }

    public function confirm_user_in_warning($warning_id)
    {
        $user = Auth::user();
        $warning = Warning::find($warning_id);

        $existings = $warning->receivers;
        $existings[] = $user->id;

        $warning->receivers = $existings;
        $warning->save();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="row">
            @if($this->list_all())
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                    <section class="warnings mb-5">
                        <div class="title-default">
                            <h1>Avisos para equipe</h1>
                        </div>
                        <div class="warnings-carrousel gap-3">
                            @for($i = 0; $i < count($this->list_all()); $i++)
                                @if($this->list_all()[$i]['participating'])
                                    <div class="warnings-item-completed">
                                        <h1 class="warnings-sender text-uppercase">
                                            {{ $this->list_all()[$i]['sender']['nickname'] }}
                                        </h1>
                                        <p class="warnings-message">
                                            {{ $this->list_all()[$i]['message'] }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="warnings-peoples-confirmations d-flex gap-2">
                                                @foreach($this->list_all()[$i]['avatars'] as $avatar)
                                                    <img src="{{ $avatar }}" alt="Avatar do colaborador" class="avatar">
                                                @endforeach
                                            </div>
                                            <div class="warnings-buttons-confirmations d-flex gap-1">
                                                @if(!$this->list_all()[$i]['participating'])
                                                    <button wire:click="confirm_user_in_warning({{ $this->list_all()[$i]['id'] }})">
                                                        <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="warnings-item">
                                        <h1 class="warnings-sender text-uppercase">
                                            {{ $this->list_all()[$i]['sender']['nickname'] }}
                                        </h1>
                                        <p class="warnings-message">
                                            {{ $this->list_all()[$i]['message'] }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="warnings-peoples-confirmations d-flex gap-2">
                                                @foreach($this->list_all()[$i]['avatars'] as $avatar)
                                                    <img src="{{ $avatar }}" alt="Avatar do colaborador" class="avatar">
                                                @endforeach
                                            </div>
                                            <div class="warnings-buttons-confirmations d-flex gap-1">
                                                <button wire:click="confirm_user_in_warning({{ $this->list_all()[$i]['id'] }})">
                                                    <img src="{{ asset('icons/panel/aprovar.svg') }}" alt="Aprovar"/>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </section>
                </div>
            @endif
        </div>
        HTML;
    }
}
