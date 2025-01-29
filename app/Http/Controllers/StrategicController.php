<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Strategic;

class StrategicController extends Controller
{
    // Menampilkan form input strategi
    public function create()
    {
        // dummy array
        $teams = ['Team - 1', 'Team - 2', 'Team - 3', 'Team - 4', 'Team - 5', 'Team - 6'];
        return view('strategic.input', ['round' => 1, 'teams' => $teams, 'currentTeam' => $teams[0]]);
    }

    // Menyimpan data strategi
    public function store(Request $request)
    {
        // $request->validate([
        //     'team' => 'required|string',
        //     'round' => 'required|integer',
        //     'hire_name' => 'required|string',
        //     'hire_cost' => 'required|numeric',
        //     'train_name' => 'required|string',
        //     'train_from' => 'required|string',
        // ]);

        // Strategic::create([
        //     'team' => $request->team,
        //     'round' => $request->round,
        //     'hire_name' => $request->hire_name,
        //     'hire_cost' => $request->hire_cost,
        //     'train_name' => $request->train_name,
        //     'train_from' => $request->train_from
        // ]);

        return redirect()->route('strategic.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('strategic.success');
    }
}
