<?php

namespace App\Http\Livewire;

use App\Models\CarouselImage;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Carousel extends Component
{
    public $images;
    public $currentIndex = 0;

    public function mount()
    {
        $this->images = CarouselImage::latest()->get();
        Log::info('Fetched images:', $this->images->toArray());
    }

    public function next()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    public function render()
    {
        return view('livewire.carousel');
    }
}
