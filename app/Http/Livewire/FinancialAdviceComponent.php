<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FinancialAdvice;

class FinancialAdviceComponent extends Component
{
    public $advice;

    public function mount()
    {
        $this->advice = FinancialAdvice::all();
    }

    public function render()
    {
        return view('livewire.financial-advice-component', ['advice' => $this->advice]);
    }
}
