<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Faq;
use Livewire\WithPagination;

class Faqs extends Component

{
    use WithPagination;

    public function render()
    {
        $faqs = Faq::paginate(6); // Fetch paginated FAQs

        return view('livewire.faqs', [
            'faqs' => $faqs
        ]);
    }
}
