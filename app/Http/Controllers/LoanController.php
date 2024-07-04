<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return view('pages.loans');
    }

    public function calculator()
    {
        return view('pages.loan-calculator');
    }
}
