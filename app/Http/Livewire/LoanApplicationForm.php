<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoanApplicationForm extends Component
{
    public $loanAmount;
    public $name;
    public $email;
    public $phone;

    public function submit()
    {

        $this->reset();
    }

    public function render()
    {
        return view('livewire.loan-application-form');
    }
}
