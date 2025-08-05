<?php

namespace App\Livewire;
use App\Models\FoodCard;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Speisekarte')]

class Card extends Component
{
    public $dishes;
    public $cardTypeTitle;

    public function mount($cardType){
        //dd($cardType);
        if($cardType === "abend"){
            $this->dishes = FoodCard::where('cardType', 'evening')->get();
            $this->cardTypeTitle = "Abendkarte";
        }
        elseif($cardType === "jause"){
            $this->dishes = FoodCard::where('cardType', 'snack')->get();
            $this->cardTypeTitle = "Jausenkarte";
        }
        else{
            $this->dishes = FoodCard::where('cardType', 'regular')->get();
            $this->cardTypeTitle = "Speisekarte";
        }
    }


    public function render()
    {
        return view('livewire.card');
    }
}
