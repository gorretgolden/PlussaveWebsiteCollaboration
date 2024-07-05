<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FinancialTip;

class FinancialTipsComponent extends Component
{
    public $tips;

    public function mount()
    {
        $this->tips = FinancialTip::all();
    }

    public function render()
    {
        return view('livewire.financial-tips-component', ['tips' => $this->tips]);
    }
}
