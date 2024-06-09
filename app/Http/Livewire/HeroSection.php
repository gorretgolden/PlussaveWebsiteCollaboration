<?php

namespace App\Http\Livewire;

use App\Models\HeroSection as ModelsHeroSection;
use Livewire\Component;

class HeroSection extends Component
{

    public $title;
    public $sub_title;
    public $backgroundImage;

    public function mount()
    {
        $this->fetchUpdates();
    }

    public function fetchUpdates()
    {
        $heroSection = ModelsHeroSection::where('type', 'about')->first();
        $this->title = $heroSection->title;
        $this->sub_title = $heroSection->sub_title;
        $this->backgroundImage = $heroSection->background_image;
    }

    public function render()
    {
        return view('livewire.hero-section');
    }
}
