<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

#[Title('Kontakt')]

class Contact extends Component
{

    public $full_name;
    public $contact_mail;
    public $subject;
    public $message;
    public $number;

    public function contactForm()
    {
        $this->validate([
            'full_name' => 'required|string|max:255',
            'contact_mail' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'number' => 'nullable|string|max:255',
        ]);

        $formData = [
            'full_name' => $this->full_name,
            'contact_mail' => $this->contact_mail,
            'subject' => $this->subject,
            'message' => $this->message,
            'number' => $this->number,
        ];

        Mail::to('trauner.jo@gmail.at')->send(new ContactFormMail($formData));

        session()->flash('contact-form-message', 'Danke für deine Nachricht! Wir melden uns bald.');

        // Optional: Felder leeren
        $this->reset(['full_name', 'contact_mail', 'subject', 'message', 'number']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
