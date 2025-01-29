<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        return view('admin.add_interest');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        return redirect()->route('admin.leaderboard');
    }
}
