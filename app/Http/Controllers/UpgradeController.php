<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upgrade;

class UpgradeController extends Controller
{
    // Menampilkan form input upgrade facility
    public function create()
    {
        return view('upgrade.input', ['round' => 1]);
    }

    // Menyimpan data upgrade facility
    public function store(Request $request)
    {
        $request->validate([
            'round' => 'required|integer',
            'facility_code' => 'required|string',
        ]);

        Upgrade::create([
            'round' => $request->round,
            'facility_code' => $request->facility_code,
        ]);

        return redirect()->route('upgrade.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('upgrade.success');
    }
}
