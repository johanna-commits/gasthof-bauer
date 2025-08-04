<?php

namespace App\Livewire;
use App\Models\Room;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Zimmer')]

class Rooms extends Component
{
    public $room_prices;

    public function mount(){
        $this->room_prices = Room::latest()->first();
        //dd($room_prices);
    }

    public function render()
    {
        return view('livewire.rooms');
    }
}
