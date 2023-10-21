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

    public $data = [];

    public function send_text()
    {
        $this->validate();
        $name = $this->name;
        $email = $this->email;
        $subject = $this->subject;
        $text = $this->text;
        // dd($name, $email, $subject, $text);

        $result = Mail::to("perfect_blog@example.com")->send(new ContactMail($name, $email, $subject, $text));
        $this->resetForm();
        session()->flash("success", trans("Message has been send"));
    }
    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->text = '';
    }

    public function render()
    {
        return view('livewire.main.contact-form');
    }
}
