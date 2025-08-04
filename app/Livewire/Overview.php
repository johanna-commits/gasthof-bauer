<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Überblick')]

class Overview extends Component
{
    public function render()
    {
        return view('livewire.overview');
    }
}
