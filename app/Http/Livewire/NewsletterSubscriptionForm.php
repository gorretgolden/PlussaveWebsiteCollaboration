<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class NewsletterSubscriptionForm extends Component
{

    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function subscribe()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email,
        ]);

        session()->flash('success', 'You have subscribed successfully!');
        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter-subscription-form');
    }

}
