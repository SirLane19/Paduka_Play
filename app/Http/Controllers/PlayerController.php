<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Credit;

class PlayerController extends Controller
{
    public function index()
    {
        $teams = Team::with('credits')->get(); // Ambil semua tim beserta data kreditnya
        return view('player.index', compact('teams')); // Panggil view player/index.blade.php
    }

    public function storeCredits(Request $request, $teamId)
    {
        $request->validate([
            'credits' => 'required|array',
            'credits.*.type' => 'required|string',
            'credits.*.amount' => 'required|integer|min:0',
        ]);

        foreach ($request->credits as $credit) {
            Credit::create([
                'team_id' => $teamId,
                'type' => $credit['type'],
                'amount' => $credit['amount']
            ]);
        }

        return redirect()->route('player.index')->with('success', 'Credits added successfully!');
    }
}
