<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SavingsPlan;

class SavingsPlansComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $savingsPlans = SavingsPlan::paginate(4);
        return view('livewire.savings-plans-component', ['savingsPlans' => $savingsPlans]);
    }

    public function updated()
    {
        $this->emit('pageChanged');
    }
}
