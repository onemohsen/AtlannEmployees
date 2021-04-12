<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Carbon\Carbon;
use Livewire\Component;

class ReportTaskComponenet extends Component
{

    public $startDate;
    public $endDate;
    public $tasks;

    protected $rules = [
        'startDate' => ['required', 'date'],
        'endDate' => ['required', 'date', 'after_or_equal:startDate'],
    ];

    public function mount()
    {
        $this->tasks = $this->getTasksWithUser();
    }

    public function filterDate()
    {
        $this->validate();
        $this->tasks = Task::with('user')->whereBetween('date', [$this->startDate, $this->endDate])->get();
    }

    private function getTasksWithUser()
    {
        return Task::with('user')->get();
    }

    public function render()
    {
        return view('livewire.report-task-componenet')->layout('layouts.admin');
    }
}
