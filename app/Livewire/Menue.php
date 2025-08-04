<?php

namespace App\Livewire;
use App\Models\Menu;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Menü')]

class Menue extends Component
{
    public $menus = [];
    public $price;

    public function mount()
    {
        $latestMenu = Menu::latest()->first();
        $this->price = Menu::latest()->first()?->menu_price;

        if ($latestMenu) {
            for ($i = 1; $i <= 3; $i++) {
                $this->menus[$i] = [
                    'date' => $latestMenu->{'menu' . $i . '_date'},
                    'soup' => $latestMenu->{'menu' . $i . '_soup'},
                    'main_course' => $latestMenu->{'menu' . $i . '_main_course'},
                    'dessert' => $latestMenu->{'menu' . $i . '_dessert'}
                ];
            }
        } else {
            for ($i = 1; $i <= 3; $i++) {
                $this->menus[$i] = [
                    'date' => null,
                    'soup' => null,
                    'main_course' => 'Kein Menü',
                    'dessert' => null
                ];
            }
        }
    }

    public function render()
    {
        return view('livewire.menu', ['menus' => $this->menus]);
    }
}
