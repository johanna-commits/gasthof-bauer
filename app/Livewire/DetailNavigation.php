<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Title;




class DetailNavigation extends Component
{
    public $sections = [];
    public $currentSection = 'overview';

    public function mount()
    {
        $this->sections = [
            ['id' => 'rooms', 'label' => 'rooms', 'text' => 'die Zimmer'],
            ['id' => 'prices', 'label' => 'prices', 'text' => 'Preise'],
            ['id' => 'information', 'label' => 'information', 'text' => 'Informationen'],
            ['id' => 'gallery', 'label' => 'gallery', 'text' => 'Galerie'],
        ];
    }

    #[On('updateCurrentSection')] //event in javascript
    public function updateCurrentSection($currentSection)
    {
        $this->currentSection = $currentSection;
    
    }

    public function render()
    {
        return view('livewire.detail-navigation');
    }

}
