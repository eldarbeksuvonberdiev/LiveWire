<?php

namespace App\Livewire;

use Livewire\Component;

class TalabaComponent extends Component
{
    public $date, $students;

    public function mount() 
    {
        
    }

    public function render()
    {
        return view('livewire.talaba-component');
    }
}
