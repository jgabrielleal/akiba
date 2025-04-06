<?php

namespace App\Livewire\Panel\Inline\Components\Dashboard;

use App\Models\Tasks;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyTasks extends Component
{
    public function get_all_tasks()
    {
        $tasks = Tasks::with(['applicant', 'executor'])->get();

        $tasks = $tasks->map(function ($task) {
            $limit = new \DateTime($task->limit);
            $now = new \DateTime();

            $interval_between_now_and_limit = $now->diff($limit);
            $task->is_due_soon = $interval_between_now_and_limit->days <= 7 && $interval_between_now_and_limit->invert == 0;
            $task->is_overdue = $interval_between_now_and_limit->invert == 1;

            $task->limit_brazilian_format = $limit->format('d/m');

            return $task;
        });

        $filter_incompleted = $tasks->filter(function ($task) {
            return $task->completed === false && Auth()->user()->id === $task->executor;
        });

        return $filter_incompleted->values()->toArray();
    }

    public function confirm_task_completion($task_id)
    {
        $task = Tasks::find($task_id);
        $task->completed = true;
        $task->save();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="row">
            @if($this->get_all_tasks())
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12">
                    <section class="my-tasks mb-5">
                        <div class="title-default">
                            <h1>Minhas Tarefas</h1>
                        </div>
                        <div class="my-tasks-carrousel gap-3">
                            @for($i = 0; $i < count($this->get_all_tasks()); $i++)
                                @if($this->get_all_tasks()[$i]['is_due_soon'])
                                    <div class="my-tasks-expirations">
                                        <div class="my-tasks-content">
                                            <h1 class="text-uppercase">{{ $this->get_all_tasks()[$i]['title'] }} </h1>
                                            <p>
                                                {{ $this->get_all_tasks()[$i]['task'] }}
                                            </p>
                                        </div>
                                        <div class="my-tasks-dates-and-completion">
                                            <div class="calendar">
                                                <span class="calendar-top d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    Data Limite
                                                </span>
                                                <span class="calendar-content d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    {{ $this->get_all_tasks()[$i]['limit_brazilian_format'] }}
                                                </span>
                                            </div>
                                            <div class="my-tasks-confirmations">
                                                <button class="btn" wire:click="confirm_task_completion({{ $this->get_all_tasks()[$i]['id'] }})">
                                                    Solicitar conclusão
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($this->get_all_tasks()[$i]['is_overdue'])
                                    <div class="my-tasks-overdue">
                                        <div class="my-tasks-content">
                                            <h1 class="text-uppercase">{{ $this->get_all_tasks()[$i]['title'] }} </h1>
                                            <p>
                                                {{ $this->get_all_tasks()[$i]['task'] }}
                                            </p>
                                        </div>
                                        <div class="my-tasks-dates-and-completion">
                                            <div class="calendar">
                                                <span class="calendar-top d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    Data Limite
                                                </span>
                                                <span class="calendar-content d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    {{ $this->get_all_tasks()[$i]['limit_brazilian_format'] }}
                                                </span>
                                            </div>
                                            <div class="my-tasks-confirmations">
                                                <button class="btn" wire:click="confirm_task_completion({{ $this->get_all_tasks()[$i]['id'] }})">
                                                    Solicitar conclusão
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else 
                                    <div class="my-tasks-item">
                                        <div class="my-tasks-content">
                                            <h1 class="text-uppercase">{{ $this->get_all_tasks()[$i]['title'] }} </h1>
                                            <p>
                                                {{ $this->get_all_tasks()[$i]['task'] }}
                                            </p>
                                        </div>
                                        <div class="my-tasks-dates-and-completion">
                                            <div class="calendar">
                                                <span class="calendar-top d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    Data Limite
                                                </span>
                                                <span class="calendar-content d-block text-uppercase d-flex align-items-center justify-content-center">
                                                    {{ $this->get_all_tasks()[$i]['limit_brazilian_format'] }}
                                                </span>
                                            </div>
                                            <div class="my-tasks-confirmations">
                                                <button class="btn" wire:click="confirm_task_completion({{ $this->get_all_tasks()[$i]['id'] }})">
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
