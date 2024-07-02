<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;

class LoanCalculator extends Component
{
    public $totalAmount;
    public $downPayment;
    public $interestRate;
    public $amortizationPeriod;
    public $monthlyPayment;

    protected $rules = [
        'totalAmount' => 'required|numeric|min:0',
        'downPayment' => 'required|numeric|min:0',
        'interestRate' => 'required|numeric|min:0',
        'amortizationPeriod' => 'required|numeric|min:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function calculateLoan()
    {
        $validatedData = $this->validate($this->rules);

        $principal = $validatedData['totalAmount'] - $validatedData['downPayment'];
        $monthlyInterestRate = $validatedData['interestRate'] / 100 / 12;
        $totalPayments = $validatedData['amortizationPeriod'] * 12;

        $monthlyPayment = ($principal * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$totalPayments));

        $this->monthlyPayment = $monthlyPayment;
    }

    public function render()
    {
        return view('livewire.loan-calculator');
    }
}
