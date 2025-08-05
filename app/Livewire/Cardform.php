<?php

namespace App\Livewire;

use App\Models\FoodCard;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Speisekarteformular')]

class Cardform extends Component
{
    public $nameFood;
    public $description;
    public $cardType;
    public $price;
    public $category;
    public $dishes;
    public $changeFoodName = [];
    public $changeFoodDescription = [];
    public $changeFoodPrice = [];
    public $changeCategory = [];

    public $changeCardType = [];

    public function mount()
    {
        $this->getDishes();
    }

    public function getDishes(){
        $this->dishes = FoodCard::orderBy('cardType')->get();
        foreach ($this->dishes as $dish) {
            $this->changeFoodName[$dish->id] = $dish->name;
            $this->changeFoodDescription[$dish->id] = $dish->description;
            $this->changeFoodPrice[$dish->id] = $dish->price;
            $this->changeCategory[$dish->id] = $dish->category;
            $this->changeCardType[$dish->id] = $dish->cardType;
        }
    }

    public function saveFood()
    {
        $this->validate([
            'nameFood' => 'required|string|max:255',
            'description' => 'string|max:255',
            'price' => 'required|string',
            'category' => 'required|string|max:255',
            'cardType' =>  'required|string|max:255',
        ]);

        //dd($this->cardType);
        FoodCard::create([
            'name' => $this->nameFood,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
            'cardType' => $this->cardType,
        ]);

        session()->flash('newDishMessage', 'Du hast ein Gericht hinzugefügt.');
        $this->nameFood = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->cardType = '';

        $this->getDishes();
    }

    public function updateFood($dishId)
    {
        // Validierung der Eingaben
        $this->validate([
            'changeFoodName.' . $dishId => 'required|string|max:255',
            'changeFoodDescription.' . $dishId => 'nullable|string|max:500',
            'changeFoodPrice.' . $dishId => 'required|string',
            'changeCategory.' . $dishId => 'required|string|max:255',
            'changeCardType.' . $dishId => 'required|string|max:255',
        ]);

        $dish = $this->dishes->find($dishId);
        if ($dish) {
            $dish->name = $this->changeFoodName[$dishId];
            $dish->description = $this->changeFoodDescription[$dishId];
            $dish->price = $this->changeFoodPrice[$dishId];
            $dish->category = $this->changeCategory[$dishId];
            $dish->cardType = $this->changeCardType[$dishId];
            $dish->save();
            session()->flash('dishMessage.' . $dishId, 'Speise erfolgreich aktualisiert!');
        } else {
            session()->flash('dishMessage.' . $dishId, 'Speise nicht gefunden!');
        }
        $this->getDishes();
    }

    public function deleteFood($dishId)
    {
        $dish = $this->dishes->find($dishId);
        if ($dish) {
            $dish->delete();
            session()->flash('dishDeleteMessage.' . $dishId, 'Speise erfolgreich gelöscht!');
        } else {
            session()->flash('dishDeleteMessage.' . $dishId, 'Speise nicht gefunden!');
        }
        $this->getDishes();
    }

    public function render()
    {
        return view('livewire.cardform', [
            'dishes' => $this->dishes,
        ]);
    }
}
