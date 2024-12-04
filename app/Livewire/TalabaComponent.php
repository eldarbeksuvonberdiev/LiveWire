<?php

namespace App\Livewire;

use App\Models\Talaba;
use Carbon\Carbon;
use Livewire\Component;

class TalabaComponent extends Component
{
    public $date, $students;

    public function mount() 
    {
        $this->date = Carbon::now();
        $this->students = Talaba::all();
    }

    public function render()
    {
        $daysInMonth = $this->date->daysInMonth;
        $days = [];
        for ($i=1; $i <= $daysInMonth; $i++) { 
            $days[] = Carbon::create($this->date->year,$this->date->month,$i);
        }
        return view('livewire.talaba-component',['days' =>$days]);
    }

    public function changeDate($date)
    {
        $this->date = Carbon::parse($date);
    }

}
