<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClientTestimonial;

class ClientTestimonials extends Component
{
    public $testimonials;

    public function mount()
    {
        // Fetch all testimonials without limit
        $this->testimonials = ClientTestimonial::all();
    }

    public function render()
    {
        return view('livewire.client-testimonials');
    }
}

