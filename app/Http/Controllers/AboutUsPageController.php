<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{

    public function index()

    {
        $aboutUs = AboutUs::limit(1)->first();
        return view('pages.about-us',compact('aboutUs'));
    }
}
