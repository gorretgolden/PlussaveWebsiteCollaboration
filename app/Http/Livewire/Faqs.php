<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Faq;

class Faqs extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = Faq::all();
    }

    public function render()
    {
        return view('livewire.faqs');
    }
}
