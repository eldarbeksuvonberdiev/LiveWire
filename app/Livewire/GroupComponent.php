<?php

namespace App\Livewire;

use App\Models\Group;
use Livewire\Component;

class GroupComponent extends Component
{

    public $groups;

    public function mount(){
        $this->groups = Group::orderBY('order','asc')->get();
    }

    public function render()
    {
        return view('livewire.group-component');
    }

    public function updateGroup($groupId){
        dd($groupId);
    }
}