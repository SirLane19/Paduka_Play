<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        return view('add_interest');
    }

    public function store(Request $request)
    {
        // Logic untuk menyimpan interest
        return redirect('/page2');
    }
}
