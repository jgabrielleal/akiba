<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use App\Models\Calendar;
use Livewire\Component;

class TeamCalendar extends Component
{
    public function get_events_on_calendar_by_day($day)
    {
        return Calendar::where('day_of_week', $day)
            ->with('responsible')
            ->get()
            ->toArray();
    }

    public function get_all_calendar_events()
    {
        return Calendar::all();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="row">
            @if(!$this->get_all_calendar_events())
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                    <section class="calendar">
                        <div class="title-default">
                            <h1>Calendário</h1>
                        </div>
                        <div class="calendar-tags d-flex gap-2">
                            <div class="calendar-tags-item text-uppercase">
                                Programas
                            </div>
                            <div class="calendar-tags-item text-uppercase">
                                Lives
                            </div>
                            <div class="calendar-tags-item text-uppercase">
                                Youtube
                            </div>
                            <div class="calendar-tags-item text-uppercase">
                                Podcast
                            </div>
                            <div class="calendar-tags-item text-uppercase">
                            </div>
                            <div class="calendar-tags-item text-uppercase">
                            </div>                        
                            <div class="calendar-tags-item text-uppercase">
                            </div>
                        </div>
                        <div class="calendar-days d-flex gap-2 mt-4">
                            <div class="calendar-days-item text-center text-uppercase d-block">Dom</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Seg</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Ter</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Qua</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Qui</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Sex</div>
                            <div class="calendar-days-item text-center text-uppercase d-block">Sab</div>
                        </div>
                        <div class="calendar-tasks d-flex gap-2 mt-3">
                            <!-- Dom -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("dom")); $i++)
                                    @if($this->get_events_on_calendar_by_day("dom")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("dom")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("dom")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("dom")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("dom")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("dom")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("dom")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("dom")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("dom")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Seg -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("seg")); $i++)
                                    @if($this->get_events_on_calendar_by_day("seg")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("seg")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("seg")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("seg")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("seg")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("seg")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("seg")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("seg")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("seg")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Ter -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("ter")); $i++)
                                    @if($this->get_events_on_calendar_by_day("ter")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("ter")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("ter")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("ter")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("ter")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("ter")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("ter")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("ter")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("ter")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Qua -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("qua")); $i++)
                                    @if($this->get_events_on_calendar_by_day("qua")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qua")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qua")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qua")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qua")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qua")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qua")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qua")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qua")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Qui -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("qui")); $i++)
                                    @if($this->get_events_on_calendar_by_day("qui")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qui")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qui")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qui")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qui")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qui")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("qui")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("qui")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("qui")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Sex -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("sex")); $i++)
                                    @if($this->get_events_on_calendar_by_day("sex")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sex")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sex")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sex")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sex")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sex")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sex")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sex")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sex")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <!-- Sab -->
                            <div class="calendar-tasks-columns">
                                @for($i = 0; $i < count($this->get_events_on_calendar_by_day("sab")); $i++)
                                    @if($this->get_events_on_calendar_by_day("sab")[$i]['category'] == "programas")
                                        <div class="calendar-tasks-item">
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sab")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sab")[$i]['category'] == "lives")
                                        <div class="calendar-tasks-item-lives">
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sab")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sab")[$i]['category'] == "youtube")
                                        <div class="calendar-tasks-item-youtube">
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sab")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                    @if($this->get_events_on_calendar_by_day("sab")[$i]['category'] == "podcast")
                                        <div class="calendar-tasks-item-podcast">
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['hours'] }}H</span>
                                            <h1>{{ $this->get_events_on_calendar_by_day("sab")[$i]['event'] }}</h1>
                                            <span>{{ $this->get_events_on_calendar_by_day("sab")[$i]['responsible']['nickname'] }}</span>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </section>
                </div>
            @endif
        </div>
        HTML;
    }
}
