<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Title;

#[Title('Login')]

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return $this->redirectRoute('overview', navigate: true);
        } else {
            throw ValidationException::withMessages([
                'email' => 'Sorry die Email stimmt nicht :(',
                'password' => 'Sorry das Passwort stimmt nicht :(',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
