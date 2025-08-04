<?php

namespace App\Livewire;
use App\Models\Menu;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Menüformular')]

class Menuform extends Component
{
    public $menu1_date, $menu1_soup, $menu1_main, $menu1_dessert;
    public $menu2_date, $menu2_soup, $menu2_main, $menu2_dessert;
    public $menu3_date, $menu3_soup, $menu3_main, $menu3_dessert;
    public $news;
    public $menu_price;

    public function mount(){
        $latestMenu = Menu::latest()->first();
        if (!$latestMenu) {
            return;
        }
        $this->menu1_date = $latestMenu->menu1_date;
        $this->menu1_soup = $latestMenu->menu1_soup;
        $this->menu1_main = $latestMenu->menu1_main_course;
        $this->menu1_dessert = $latestMenu->menu1_dessert;
        $this->menu2_date = $latestMenu->menu2_date;
        $this->menu2_soup = $latestMenu->menu2_soup;
        $this->menu2_main = $latestMenu->menu2_main_course;
        $this->menu2_dessert = $latestMenu->menu2_dessert;
        $this->menu3_date = $latestMenu->menu3_date;
        $this->menu3_soup = $latestMenu->menu3_soup;
        $this->menu3_main = $latestMenu->menu3_main_course;
        $this->menu3_dessert = $latestMenu->menu3_dessert;
        $this->menu_price = $latestMenu->menu_price;
    }

    // Validierungsregeln
    protected $rules = [
        'menu1_date' => 'nullable|date|after_or_equal:today',
        'menu1_soup' => 'nullable|string|max:255',
        'menu1_main' => 'nullable|string|max:255',
        'menu1_dessert' => 'nullable|string|max:255',
        
        'menu2_date' => 'nullable|date|after_or_equal:today',
        'menu2_soup' => 'nullable|string|max:255',
        'menu2_main' => 'nullable|string|max:255',
        'menu2_dessert' => 'nullable|string|max:255',
        
        'menu3_date' => 'nullable|date|after_or_equal:today',
        'menu3_soup' => 'nullable|string|max:255',
        'menu3_main' => 'nullable|string|max:255',
        'menu3_dessert' => 'nullable|string|max:255',
    
        'menu_price' => 'nullable|string|max:255',
    ];

    public function saveMenus()
    {
        $this->validate();

        Menu::updateOrCreate(
            ['id' => 1], // Hier wird ein spezifischer Menüeintrag gesucht (id = 1)
            [
                'menu1_date' => $this->menu1_date,
                'menu1_soup' => $this->menu1_soup,
                'menu1_main_course' => $this->menu1_main,
                'menu1_dessert' => $this->menu1_dessert,
                'menu2_date' => $this->menu2_date,
                'menu2_soup' => $this->menu2_soup,
                'menu2_main_course' => $this->menu2_main,
                'menu2_dessert' => $this->menu2_dessert,
                'menu3_date' => $this->menu3_date,
                'menu3_soup' => $this->menu3_soup,
                'menu3_main_course' => $this->menu3_main,
                'menu3_dessert' => $this->menu3_dessert,
                'menu_price' => $this->menu_price,
            ]
        );
    
        session()->flash('message', 'Menüs erfolgreich gespeichert.');
    }
     
    public function render()
    {
        return view('livewire.menuform');
    }
}
