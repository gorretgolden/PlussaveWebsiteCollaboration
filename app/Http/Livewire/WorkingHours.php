<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\WorkingHour;
#testing3

class WorkingHours extends Component
{
    public $workingHours;

    public function mount()
    {

        $this->workingHours = WorkingHour::take(7)->get();
    }

    public function render()
    {
        return view('livewire.working-hours');
    }
}
