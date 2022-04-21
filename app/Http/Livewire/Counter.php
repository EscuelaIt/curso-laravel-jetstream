<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function increase($cant = 1)
    {
        $this->counter = $this->counter + $cant;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
