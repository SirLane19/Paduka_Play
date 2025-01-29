<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    // Menampilkan form pemilihan tim
    public function create()
    {
        return view('player.create');
    }

    // Menyimpan data pemain yang dipilih
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
        ]);

        Player::create([
            'name' => $request->name,
            'icon' => $request->icon,
        ]);

        return redirect()->route('player.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('player.success');
    }
}
