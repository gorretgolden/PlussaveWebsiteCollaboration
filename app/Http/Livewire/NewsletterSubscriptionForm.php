<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class NewsletterSubscriptionForm extends Component
{

    public $email;
    public $loading = false;


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

        $this->loading = true;

        // Simulate subscription process (replace with actual logic)
        sleep(2); // Example delay

        Subscriber::create([
            'email' => $this->email,
            'subscribed_at' => now(),
        ]);

        session()->flash('success', 'You have subscribed successfully!');

        $this->reset(['email', 'loading']);
    }

    public function render()
    {
        return view('livewire.newsletter-subscription-form');
    }

}
