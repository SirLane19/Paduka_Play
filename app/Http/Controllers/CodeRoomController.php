<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CodeRoomController extends Controller
{
    public function index()
    {
        return view('code_room');
    }

    public function createGameToken(Request $request)
    {
        // Ini Create Game
        // Sebelum data masuk ke database, game nya harus udah kelar dulu
        // Saat game dimulai, di session bakal ada status "waiting"
        // dd($request->all());
        $token = $request->input('code');

        Cache::put("game_session_{$token}_status", 'waiting', now()->addMinutes(60));
        return redirect()->route('admin.addinterest');
    }

    // Fungsi untuk menambahkan pemain ke dalam game
    public function addPlayer(Request $request, $token)
    {
        // Simpan nama pemain dalam cache atau session
        $playerName = $request->input('name');
        // Cache::put("game_session_{$token}_player_{$playerName}", 'waiting', now()->addMinutes(60)); // Status pemain 'waiting'
        return response()->json(['message' => 'Player added to the waiting list']);
    }

    // Fungsi untuk memulai game
    public function startGame($token)
    {
        Cache::put("game_session_{$token}_status", 'started', now()->addMinutes(60)); // Bertahan 1 jam
        return response()->json(['message' => 'Game started']);
    }

    // Fungsi untuk mengakhiri game
    public function endGame($token)
    {
        Cache::put("game_session_{$token}_status", 'finished', now()->addMinutes(60)); // Bertahan 1 jam
        return response()->json(['message' => 'Game ended']);
    }

    // Fungsi untuk melihat status game berdasarkan token
    public function getGameStatus(Request $request)
    {
        $token = $request->token;
        $sessionStatus = Cache::get("game_session_{$token}_status", 'pending');
        return response()->json(['status' => $sessionStatus]);
    }
}
