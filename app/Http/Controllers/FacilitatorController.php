<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitatorController extends Controller
{
    public function strategist()
    {
        return view('facilitator_strategist_page');
    }

    public function marketing()
    {
        return view('facilitator_marketing_page');
    }
}
