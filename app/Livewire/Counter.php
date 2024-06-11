<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment($n = 1)
    {
        $this->count += $n;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
    public function resetCounter()
    {
        $this->count = 0;
    }
}
