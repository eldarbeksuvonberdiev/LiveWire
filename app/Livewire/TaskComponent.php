<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{
    public $tasks;

    public function mount(){
        $this->tasks = Task::all()->groupBy('status')->toArray();
        // dd($this->tasks);
    }

    public function render()
    {
        return view('livewire.task-component');
    }
}
