<?php

namespace App\Http\Livewire;
use App\Models\AccountType;
use Livewire\Component;

class AccountTypes extends Component
{
    public $accountTypes;

    public function mount()
    {
        $this->accountTypes = AccountType::with('features', 'benefits')->get();
    }
    public function render()
    {
        return view('livewire.account-types');
    }
}
