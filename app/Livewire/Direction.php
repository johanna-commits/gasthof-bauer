<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Anfahrt')]

class Direction extends Component
{
    public function render()
    {
        return view('livewire.direction');
    }
}
