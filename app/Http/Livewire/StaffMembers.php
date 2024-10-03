<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TeamMembers;

class StaffMembers extends Component
{
    use WithPagination;

    public function render()
    {
        $staffMembers = TeamMembers::where('type', 'staff-members')->paginate(8);
        return view('livewire.staff-members', compact('staffMembers'));
    }
}
