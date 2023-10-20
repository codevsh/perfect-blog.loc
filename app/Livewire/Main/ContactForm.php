<?php

namespace App\Livewire\Main;

use Livewire\Component;
use App\Mail\ContactMail;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    #[Rule("required")]
    public $name;

    #[Rule("required|email")]
    public $email;

    #[Rule("required")]
    public $subject;

    #[Rule("required")]
    public $text;


    public function send_text()
    {
        $this->validate();
        $data = [];
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['subject'] = $this->subject;
        $data['text'] = $this->text;

        $result = Mail::to("perfect_blog@example.com")->send(new ContactMail($this->data));


    }

    public function render()
    {
        return view('livewire.main.contact-form');
    }
}
