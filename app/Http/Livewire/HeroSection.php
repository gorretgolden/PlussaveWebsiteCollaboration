<?php

namespace App\Http\Livewire;

use App\Models\HeroSection as ModelsHeroSection;
use Livewire\Component;

class HeroSection extends Component
{

    public $title;
    public $sub_title;
    public $backgroundImage;
    public $type;

    public function mount($type)
    {
        $this->type = $type;
        $this->fetchHeroSection();
    }

    public function fetchHeroSection()
    {
        $heroSection = ModelsHeroSection::where('type', $this->type)->first();

        if ($heroSection) {
            $this->title = $heroSection->title;
            $this->sub_title = $heroSection->sub_title;
            $this->backgroundImage = $heroSection->background_image;
        } else {
            // Handle case where no hero section is found for the specified type
            $this->title = 'Default Title';
            $this->sub_title = 'Default Subtitle';
            $this->backgroundImage = 'default.jpg';
        }
    }

    public function render()
    {
        return view('livewire.hero-section');
    }
}
