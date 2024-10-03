<?php

namespace App\Http\Livewire;

use App\Models\ServiceType;
use Livewire\Component;

class ServiceTypes extends Component
{

    public $serviceTypes;
    protected $pollingInterval = 5000; // Poll every 5 seconds

    public function mount()
    {
        $this->fetchServices();
    }

    public function fetchServices()
    {
        $this->serviceTypes = ServiceType::all();
    }


    public function render()
    {
        return view('livewire.service-types');
    }
}
