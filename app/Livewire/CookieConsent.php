<?php

namespace App\Livewire;

use Livewire\Component;

class CookieConsent extends Component
{
    public $showModal = false;

    public function mount()
    {
        if (!request()->hasCookie('cookie_consent')) {
            $this->showModal = true;
        }
    }

    public function accept()
    {
        cookie()->queue(cookie('cookie_consent', 'accepted', 60 * 24 * 365)); // 1 Jahr
        $this->showModal = false;
    }

    public function decline()
    {
        cookie()->queue(cookie('cookie_consent', 'declined', 60 * 24 * 365));
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.cookie-consent');
    }
}

