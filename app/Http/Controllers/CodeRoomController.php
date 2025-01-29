<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeRoomController extends Controller
{
    public function index()
    {
        return view('code_room');
    }

    public function login(Request $request)
    {
        // ;
        return redirect()->route('admin.addinterest');
    }
}
