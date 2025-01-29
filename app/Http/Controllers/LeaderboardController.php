<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaderboard;

class LeaderboardController extends Controller
{
    // Menampilkan leaderboard
    public function index()
    {
        $round = 1; // Default round
        $leaderboard = Leaderboard::orderBy('rank', 'asc')->get();

        return view('admin.leaderboard', compact('leaderboard', 'round'));
    }

    // Mengakhiri ronde
    public function endRound()
    {
        // Logika untuk mengakhiri ronde (misalnya update leaderboard)
        return redirect()->route('admin.leaderboard')->with('message', 'Round ended successfully!');
    }

    // Mengakhiri game
    public function endGame()
    {
        // Logika untuk mengakhiri permainan (reset leaderboard atau archive)
        // Leaderboard::truncate();
        return redirect()->route('admin.leaderboard')->with('message', 'Game ended successfully!');
    }
}
