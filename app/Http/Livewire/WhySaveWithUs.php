<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\WhySaveWithUs as WhySaveWithUsModel;

class WhySaveWithUs extends Component
{
    public $items;

    public function mount()
    {
        // Fetch only 4 items from the database
        $this->items = WhySaveWithUsModel::limit(4)->get();
    }

    public function render()
    {
        return view('livewire.why-save-with-us');
    }
}
