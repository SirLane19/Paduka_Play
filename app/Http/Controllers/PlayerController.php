<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Cache;

class PlayerController extends Controller
{
    // Menampilkan form pemilihan tim
    public function create()
    {
        return view('player.create');
    }

    public function store(Request $request)
    {
        // Simpan nama pemain dalam cache, karena cache global buat satu server dan gampang dimanipulasi

        $token = Cache::get('token');
        $players = Cache::get("game_session_{$token}_players", []);

        $players[] = $request->input('name');
        Cache::put("game_session_{$token}_players", $players, now()->addMinutes(60));

        return redirect('/game/input');
    }

    public function play(Request $request)
    {
        return redirect('/waiting');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('player.success');
    }
}
