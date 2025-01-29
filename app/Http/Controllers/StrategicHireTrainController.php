<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Strategic;

class StrategicHireTrainController extends Controller
{
    // Menampilkan form input hire & train
    public function create()
    {
        $teams = ['Team - 1', 'Team - 2', 'Team - 3', 'Team - 4', 'Team - 5', 'Team - 6'];
        $trainers = ['Trainer A', 'Trainer B', 'Trainer C']; // Tambahan trainer untuk train_from
        return view('strategic.hire_train', [
            'round' => 1, 
            'teams' => $teams, 
            'trainers' => $trainers
        ]);
    }

    // Menyimpan data hire & train
    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required|string',
            'round' => 'required|integer',
            'hire_name' => 'required|string',
            'hire_cost' => 'required|numeric',
            'train_name' => 'required|string',
            'train_from' => 'required|string',
        ]);

        Strategic::create([
            'team' => $request->team,
            'round' => $request->round,
            'hire_name' => $request->hire_name,
            'hire_cost' => $request->hire_cost,
            'train_name' => $request->train_name,
            'train_from' => $request->train_from,
        ]);

        return redirect()->route('strategic.hire_train.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('strategic.hire_train_success');
    }
}
