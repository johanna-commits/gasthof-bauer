<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Datenschutz')]
class Data extends Component
{
    public function render()
    {
        return view('livewire.data');
    }
}
