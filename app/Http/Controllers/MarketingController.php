<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarketingRound;

class MarketingController extends Controller
{
    // Menampilkan form input marketing
    public function create()
    {
        $teams = ['Team - 1', 'Team - 2', 'Team - 3', 'Team - 4', 'Team - 5', 'Team - 6'];
        return view('marketing.input', ['round' => 1, 'teams' => $teams, 'currentTeam' => $teams[0]]);
    }

    // Menyimpan data marketing
    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required|string',
            'round' => 'required|integer',
            'upgrade_name' => 'required|string',
            'upgrade_cost' => 'required|numeric',
            'reach_customer' => 'required|string',
        ]);

        MarketingRound::create([
            'team' => $request->team,
            'round' => $request->round,
            'upgrade_name' => $request->upgrade_name,
            'upgrade_cost' => $request->upgrade_cost,
            'reach_customer' => $request->reach_customer,
        ]);

        return redirect()->route('marketing.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('marketing.success');
    }
}
