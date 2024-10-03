<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FinancialAdvice;

class FinancialAdviceComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $financialAdvice = FinancialAdvice::paginate(4);
        return view('livewire.financial-advice-component', ['financialAdvice' => $financialAdvice]);
    }

    public function updated()
    {
        $this->emit('pageChanged');
    }
}
