<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Ambiente')]

class Ambiente extends Component
{
    public function render()
    {
        return view('livewire.ambiente');
    }
}
