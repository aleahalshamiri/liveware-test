<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number;
    public $count = 0;

    // public function mount($number)
    // {
    //     $this->count = $number;
    // }
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
