<?php

namespace App\Livewire\Panel\Inline\Layout;

use Livewire\Component;

class Status extends Component
{
    public function get_status_streaming($type)
    {
        $xml=simplexml_load_file("http://cast.radioamc.com.br/api/Vkc1d2FrMHdNVUpRVkRBOStS");

        switch($type){
            case "listeners":
                return $xml->ouvintes_conectados;
            break;
            case "status":
                return $xml->status;
            break;
            case "kbps":
                return $xml->plano_bitrate;
            break;
        }
    }

    public function render()
    {
        return <<<'HTML'
        <div class="position-fixed bottom-0 w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section class="status d-flex">
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/kbps.svg') }}" alt="kbps">
                                <span class="d-block text-uppercase" wire:poll.10s>{{ $this->get_status_streaming("kbps")}}</span>
                            </div>
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/transmissao.svg') }}" alt="transmissão">
                                <span class="d-block text-uppercase" wire:poll.10s>{{ $this->get_status_streaming("status")}}</span>
                            </div>
                            <div class="status-item d-flex align-items-center gap-2">
                                <img src="{{ asset('icons/panel/ouvintes.svg') }}" alt="ouvintes">
                                <span class="d-block text-uppercase" wire:poll.10s>{{ $this->get_status_streaming("listeners")}} ouvintes</span>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        HTML;
    }
}
