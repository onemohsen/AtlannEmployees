<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskComponent extends Component
{
    public $user;
    public $task;
    public $showModal = false;
    public $isEdit = false;

    public function mount()
    {
        $this->user = Auth::user();
        $this->task = $this->makeBlankTask();
    }

    public function makeBlankTask()
    {
        $this->task = Task::make();
    }

    public function rules()
    {
        return [
            'task.name' => 'required',
            'task.note' => 'sometimes'
        ];
    }

    public function create()
    {
        $this->makeBlankTask();
        $this->isEdit = false;
        $this->showModal = true;
    }

    public function edit(Task $task)
    {
        $this->task = $task;
        $this->isEdit = true;
        $this->showModal = true;
    }

    public function delete(Task $task)
    {
        $this->task = $task;
        $this->task->delete();
    }

    public function store()
    {
        $this->validate();
        $this->task->user_id = $this->user->id;
        $this->task->save();
        $this->showModal = false;
    }

    public function render()
    {
        $tasks = $this->user->tasks()->whereDate('date', Carbon::today())->get();
        return view('livewire.task-component', compact('tasks'));
    }
}
