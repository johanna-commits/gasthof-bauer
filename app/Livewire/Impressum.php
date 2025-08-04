<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Impressum')]
class Impressum extends Component
{
    public function render()
    {
        return view('livewire.impressum');
    }
}
