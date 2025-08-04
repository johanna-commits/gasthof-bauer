<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Gutschein')]

class Voucher extends Component
{
    public function render()
    {
        return view('livewire.voucher');
    }
}
