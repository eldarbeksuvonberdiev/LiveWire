<?php

namespace App\Livewire;

use Livewire\Component;

class CalcComponent extends Component
{
    public $a = 0;
    public $num1 = '';
    public $num2 = '';
    public $hisob;
    public function render()
    {
        return view('livewire.calc-component');
    }

    public function add(){
        $this->a++;
    }

    public function sub(){
        if ($this->a > 0) {
            $this->a--;
        }
    }

    public function sum(){
        $this->hisob = $this->num1 + $this->num2;
        $this->num1 = '';
        $this->num2 = '';
    }
}
