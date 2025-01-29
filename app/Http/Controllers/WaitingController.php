<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaitingController extends Controller
{
    public function show()
    {
        return view('waiting');
    }
}
