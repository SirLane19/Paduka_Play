<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameInput;

class GameInputController extends Controller
{
    // Menampilkan form input data
    public function create()
    {
        return view('game.input', ['round' => 1]);
    }

    // Menyimpan data input dari pemain
    public function store(Request $request)
    {
        $request->validate([
            'kredit_konsumtif' => 'required|numeric',
            'kredit_produktif' => 'required|numeric',
            'penempatan_pusat' => 'required|numeric',
            'giro' => 'required|numeric',
            'pinjaman_pusat' => 'required|numeric',
            'asuransi' => 'required|numeric',
            'kartu_kredit' => 'required|numeric',
            'bintang' => 'required|numeric',
        ]);

        // Ke Database >>>>
        // GameInput::create([
        //     'round' => $request->round,
        //     'kredit_konsumtif' => $request->kredit_konsumtif,
        //     'kredit_produktif' => $request->kredit_produktif,
        //     'penempatan_pusat' => $request->penempatan_pusat,
        //     'giro' => $request->giro,
        //     'pinjaman_pusat' => $request->pinjaman_pusat,
        //     'asuransi' => $request->asuransi,
        //     'kartu_kredit' => $request->kartu_kredit,
        //     'bintang' => $request->bintang,
        // ]);

        return redirect()->route('game.success');
    }

    // Menampilkan halaman sukses (opsional)
    public function success()
    {
        return view('game.success');
    }
}
