<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMail;
use App\Mail\ContactFormNotificationMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\ContactForm as ContactFormSubmission;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:5|max:100',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'message' => 'required|min:5|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendContactMessage()
    {
        $this->validate($this->rules);

        // Store submission in database
        $submission = ContactFormSubmission::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        // Send email notification
        //$this->sendEmailNotification();

        // Reset form fields after successful submission
        $this->reset(['name', 'email', 'phone', 'message']);

        session()->flash('success', 'Message sent successfully! We will get back to you shortly.');
    }

    private function sendEmailNotification()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ];

        // Example: Send email to client
        Mail::to($this->email)->send(new ContactFormMail($data));


        $adminEmail = 'nabatanzigorret143@gmail.com';
        Mail::to($adminEmail)->send(new ContactFormNotificationMail($data));
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
