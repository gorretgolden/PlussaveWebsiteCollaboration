<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUsInformation as ContactInfo;

class ContactUsInformation extends Component
{
    public $contactInformation;

    public function mount()
    {
        $this->contactInformation = ContactInfo::first();
    }

    public function render()
    {
        return view('livewire.contact-us-information', [
            'contactInformation' => $this->contactInformation,
        ]);
    }
}

