<?php

namespace App\Livewire;

use App\Models\Menu;
use Livewire\Component;
use App\Models\Customer;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;

#[Title('Newsletter')]

class Newsletter extends Component
{
    public $newsletter;
    public $subject;
    public $title;

    public function sendNewsletter()
    {
        $this->validate([
            'newsletter' => 'required',
            'subject' => 'required',
        ]);

        $mail = "trauner.jo@gmail.com";

        $subscribers = Customer::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new \App\Mail\NewsletterMail($this->subject, $this->title, $this->newsletter));
        }
        //Mail::to($mail)->send(new \App\Mail\NewsletterMail($this->subject, $this->title, $this->newsletter));

        $this->newsletter = '';
        $this->subject = '';
        $this->title = '';

        session()->flash('newsletterMessage', 'Newsletter versendet!');
    }

    public function render()
    {
        return view('livewire.newsletter');
    }
}
