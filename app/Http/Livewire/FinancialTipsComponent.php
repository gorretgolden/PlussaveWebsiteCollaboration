<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FinancialTip;

use Livewire\WithPagination;


class FinancialTipsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $financialTips = FinancialTip::paginate(4);
        return view('livewire.financial-tips-component', ['financialTips' => $financialTips]);
    }

    public function updated()
    {
        $this->emit('pageChanged');
    }
}
