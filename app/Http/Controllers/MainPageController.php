<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        return view('main_page');
    }

    public function endRound(Request $request)
    {
        // Logic untuk mengakhiri round
        return back();
    }

    public function endGame(Request $request)
    {
        // Logic untuk mengakhiri game
        return redirect('/');
    }
}
