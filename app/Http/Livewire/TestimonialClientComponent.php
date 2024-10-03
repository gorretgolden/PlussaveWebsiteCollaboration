<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Testimonial;

class TestimonialClientComponent extends Component
{
    public $clients = [];

    public function mount()
    {
        $this->clients = Testimonial::all(); // Fetch clients from the database
    }

    public function render()
    {
        return view('livewire.testimonial-client-component', [
            'clients' => $this->clients
        ]);
    }


}
