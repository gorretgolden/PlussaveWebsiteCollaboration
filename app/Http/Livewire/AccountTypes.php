<?php

namespace App\Http\Livewire;
use App\Models\AccountType;
use Livewire\Component;

class AccountTypes extends Component
{
    public $accountTypes;
    public $loading = true;

    public function mount()
    {
        $this->loading = true;
        sleep(8);

        $this->accountTypes = AccountType::with('features', 'benefits')->get();
        $this->loading = false;
    }
    public function render()
    {
        return view('livewire.account-types');
    }
}
