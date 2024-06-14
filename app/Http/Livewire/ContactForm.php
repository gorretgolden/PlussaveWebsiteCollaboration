<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:5|max:100',
        'email' => 'required|email',
        'message' => 'required|min:5|max:255',
    ];

    public function sendContactMessage()
    {
        $this->validate($this->rules);

        // Process your contact form logic here (e.g., send email)

        // Example: Simulate sending an email
        // Mail::to($this->email)->send(new ContactFormMail($this->message));

        // Reset form fields after successful submission
        $this->reset(['name', 'email', 'message']);

        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
