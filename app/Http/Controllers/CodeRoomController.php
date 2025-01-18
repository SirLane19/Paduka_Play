<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeRoomController extends Controller
{
    public function index()
    {
        return view('code_room_login');
    }

    public function login(Request $request)
    {
        // Logic untuk login
        return redirect('/page1');
    }
}
