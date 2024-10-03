<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TeamMembers;

class BoardMembers extends Component
{
    use WithPagination;

    public function render()
    {
        $boardMembers = TeamMembers::where('type', 'board-members')->paginate(4);
        return view('livewire.board-members', compact('boardMembers'));
    }
}
