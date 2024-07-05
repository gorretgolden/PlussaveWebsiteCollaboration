<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SavingsPlan;

class SavingsPlansComponent extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = SavingsPlan::all();
    }

    public function render()
    {
        return view('livewire.savings-plans-component', ['plans' => $this->plans]);
    }
}
