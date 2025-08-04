<?php

namespace App\Livewire;
use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Zimmerpreisformular')]
class RoomsForm extends Component
{
    public $single_room_price;
    public $double_room_price;
    public $single_room_christmas_price;
    public $double_room_christmas_price;

    public function mount(){
        $room_prices = Room::latest()->first();
        $this->single_room_price = $room_prices->single_room_regular_price ?? '51,--';
        $this->double_room_price = $room_prices->double_room_regular_price ?? '42,--';
        $this->single_room_christmas_price = $room_prices->single_room_christmas_price ?? '55,--';
        $this->double_room_christmas_price = $room_prices->double_room_christmas_price ?? '44,--';
    }
    public function changeRoomPrice(){
        $this->validate([
            'single_room_price' => 'required|string',
            'double_room_price' => 'required|string',
            'single_room_christmas_price' => 'required|string',
            'double_room_christmas_price' => 'required|string',
        ]);

        $room = Room::latest()->first();

        if ($room) {
            $room->update([
                'single_room_regular_price' => $this->single_room_price,
                'double_room_regular_price' => $this->double_room_price,
                'single_room_christmas_price' => $this->single_room_christmas_price,
                'double_room_christmas_price' => $this->double_room_christmas_price,
            ]);
        } else {
            Room::create([
                'single_room_regular_price' => $this->single_room_price,
                'double_room_regular_price' => $this->double_room_price,
                'single_room_christmas_price' => $this->single_room_christmas_price,
                'double_room_christmas_price' => $this->double_room_christmas_price,
            ]);
        }
        session()->flash('changePriceMessage', 'Zimmerpreise erfolgreich gespeichert.');

    }

    public function render()
    {
        return view('livewire.rooms-form');
    }
}
