<?php

namespace App\Livewire;
use Illuminate\Support\Str;
use App\Models\Customer;

use Livewire\Component;

class Footer extends Component
{

    public $title;
    public $name;
    public $email;

    protected $rules = [
        'title' => 'required|in:herr,frau,diverse',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:customers,email',
    ];


    public function saveCostumer()
    {

        $validatedData = $this->validate();
        $costumer = Customer::create([
            'title' => $this->title,
            'name' => $this->name,
            'email' => $this->email,
            'unsubscribe_token' => Str::uuid(),
        ]);
        session()->flash('costumerMessage', 'Du hast dich für unseren Newsletter angemeldet!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.footer');
    }

}
