<?php

namespace App\Livewire;
use App\Models\FoodCard;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Speisekarte')]

class Card extends Component
{
    public $dishes;

    public function mount($cardType){
        //dd($cardType);
        if($cardType === "abend"){
            $this->dishes = FoodCard::where('cardType', 'evening')->get();
        }
        elseif($cardType === "jause"){
            $this->dishes = FoodCard::where('cardType', 'snack')->get();
        }
        else{
            $this->dishes = FoodCard::where('cardType', 'regular')->get();
        }
    }


    public function render()
    {
        return view('livewire.card');
    }
}
