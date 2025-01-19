<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credit; // Model untuk kredit
use App\Models\Team; // Model untuk tim

class PlayerController extends Controller
{
    public function index()
    {
        return view('player.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kredit_konsumtif' => 'required|integer|min:0',
            'kredit_produktif' => 'required|integer|min:0',
            'kartu_kredit' => 'required|integer|min:0',
            'asuransi' => 'required|integer|min:0',
            'pinjaman_kp' => 'required|integer|min:0',
        ]);

        // Simpan data ke database
        Credit::create([
            'team_id' => 1, // Ganti dengan ID tim yang sesuai
            'type' => 'Kredit Konsumtif',
            'amount' => $request->kredit_konsumtif,
        ]);

        // Tambahkan penyimpanan untuk field lain

        return redirect()->route('player.index')->with('success', 'Data saved successfully!');
    }
}
