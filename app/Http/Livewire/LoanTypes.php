<?php

namespace App\Http\Livewire;

use App\Models\LoanType;
use Livewire\Component;

class LoanTypes extends Component
{

    public $loanTypes;

    public function mount()
    {
        $this->loanTypes = LoanType::all();
    }

    public function render()
    {
        return view('livewire.loan-types');
    }

}
