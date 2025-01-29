<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InterestController extends Controller
{
    public function index()
    {
        return view('admin.add_interest');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Cache::put("interest1", $request->input('interest1'), now()->addMinutes(60));
        Cache::put("interest2", $request->input('interest2'), now()->addMinutes(60));
        Cache::put("interest3", $request->input('interest3'), now()->addMinutes(60));
        Cache::put("interest4", $request->input('interest4'), now()->addMinutes(60));

        $token = Cache::get('token');
        Cache::put("game_session_{$token}_status", 'started', now()->addMinutes(60)); // Bertahan 1 jam

        return redirect()->route('admin.leaderboard');
    }
}
