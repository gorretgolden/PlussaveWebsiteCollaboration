<?php

namespace App\Http\Livewire;

use App\Models\LoanInformation;
use Livewire\Component;

class LoanInformationSection extends Component
{

    public $loanSection;

    public function mount()
    {
        $this->loanSection = LoanInformation::first();
    }


    public function render()
    {
        return view('livewire.loan-information-section');
    }
}
