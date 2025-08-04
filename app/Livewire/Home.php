<?php

namespace App\Livewire;

use App\Models\Menu;
use App\Models\News;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Home')]

class Home extends Component
{
    public $menus = [];
    public $news = [];

    public function mount(){

        $this->news = News::all();
        $latestMenu = Menu::latest()->first();

        if ($latestMenu) {
            $this->setupMenusFromDatabase($latestMenu);
        } else {
            $this->setupDefaultMenus();
        }
    }

    protected function setupMenusFromDatabase($menu)
    {
        for ($i = 1; $i <= 3; $i++) {
            $this->menus[$i] = [
                'date' => $menu->{'menu' . $i . '_date'},
                'soup' => $menu->{'menu' . $i . '_soup'},
                'main_course' => $menu->{'menu' . $i . '_main_course'},
                'dessert' => $menu->{'menu' . $i . '_dessert'},
            ];
        }

        $this->menus['menu_price'] = $menu->menu_price;
    }

    protected function setupDefaultMenus()
    {
        $this->menus = null;
    }



    public function render()
    {
        return view('livewire.home', ['menus' => $this->menus]);
    }
}
