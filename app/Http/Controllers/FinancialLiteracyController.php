<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialLiteracyController extends Controller
{
    public function index()
    {
        return view('pages.financial-literacy');
    }
}
