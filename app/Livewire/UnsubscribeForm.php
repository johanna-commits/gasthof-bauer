<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class UnsubscribeForm extends Component
{
    public $token;
    public $statusMessage;

    public function mount($token)
    {
        $this->token = $token;

        $subscriber = Customer::where('unsubscribe_token', $this->token)->first();

        if (!$subscriber) {
            $this->statusMessage = 'Hoppla! Dieser Link ist ungültig oder abgelaufen.';
            return;
        }

        if (!$subscriber->is_subscribed) {
            $this->statusMessage = 'Du bist bereits vom Newsletter abgemeldet.';
            return;
        }

        $subscriber->update(['is_subscribed' => false]);
        $this->statusMessage = 'Du wurdest erfolgreich vom Newsletter abgemeldet. 📨';
    }

    public function render()
    {
        return view('livewire.unsubscribe-form');
    }
}
