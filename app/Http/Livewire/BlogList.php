<?php

namespace App\Http\Livewire;

use App\Models\BlogList as Blog;
use App\Models\InstagramPost;
use Livewire\Component;

class BlogList extends Component
{
    public function render()
    {

        $blogs = InstagramPost::latest()->paginate(6);

        return view('livewire.blog-list', compact('blogs'));


    }

    public function mount()
{
    $this->dispatchBrowserEvent('initAutoScroll');
}
}
