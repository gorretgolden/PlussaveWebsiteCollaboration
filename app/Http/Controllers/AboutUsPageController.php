<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\TeamMembers;
use Illuminate\Http\Request;
use Livewire\WithPagination;
class AboutUsPageController extends Controller
{
    use WithPagination;
    public function index()

    {
        $aboutUs = AboutUs::first();
        $staffMembers = TeamMembers::where('type', 'staff-members')->paginate(8);
        $executiveMembers = TeamMembers::where('type', 'executive-members')->paginate(4);
        $boardMembers = TeamMembers::where('type', 'board-members')->get();

        return view('pages.about-us',compact('aboutUs','staffMembers','executiveMembers','boardMembers'));
    }
}
