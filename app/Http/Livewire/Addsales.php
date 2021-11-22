<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Addsales extends Component
{
    public $count = 0;
    public $value = 0;
    public $data = "";
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.addsales');
    }
    public function decrement(){
        $this->count--;
    }
    public function checkValue(){
        if($this->count<5){
            $this->data = "what the hell";
        }else{
            $this->data = "Here its greater than 100";
        }
    }

}
