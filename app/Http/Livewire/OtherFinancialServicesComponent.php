<?php

namespace App\Http\Livewire;

use App\Models\OtherFinancialService;
use Livewire\Component;
use Livewire\WithPagination;
class OtherFinancialServicesComponent extends Component
{

    use WithPagination;
    public function render()
    {
        $financialServices = OtherFinancialService::paginate(4);
        return view('livewire.other-financial-services-component',compact('financialServices'));
    }
}
