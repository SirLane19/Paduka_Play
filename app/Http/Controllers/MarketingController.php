<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\MarketingData;

class MarketingController extends Controller
{
    // Tampilkan halaman Marketing
    public function index()
    {
        $teams = Team::all(); // Ambil semua tim
        return view('marketing.index', compact('teams'));
    }

    // Simpan data marketing
    public function store(Request $request, $teamId)
    {
        $request->validate([
            'facility_name' => 'required|string',
            'cost' => 'required|integer|min:0',
        ]);

        MarketingData::create([
            'team_id' => $teamId,
            'facility_name' => $request->facility_name,
            'cost' => $request->cost,
        ]);

        return redirect()->route('marketing.index')->with('success', 'Facility upgraded successfully!');
    }
}
