<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskStatusUpdate extends Component
{
    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function updateStatus($status)
    {
        $this->task->update(['status' => $status]);
        $this->task->refresh();
    }

    public function render()
    {
        return view('livewire.task-status-update', ['task' => $this->task]);
    }
}


