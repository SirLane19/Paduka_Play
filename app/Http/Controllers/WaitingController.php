<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaitingController extends Controller
{
    public function show()
    {
        // Anda dapat menambahkan logika di sini, seperti pengecekan status game
        return view('waiting');
    }
}