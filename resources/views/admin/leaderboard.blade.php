@extends('layouts.app')

@section('title', 'Admin - Leaderboard')

@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 20px;
    }

    .container {
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 700px;
        text-align: center;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .header h1 {
        font-size: 1.6rem;
        font-weight: bold;
    }

    .round-badge {
        background: black;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .leaderboard {
        background: #f0f0f0;
        padding: 15px;
        border-radius: 8px;
        margin-top: 15px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
    }

    .table th {
        background: #ddd;
        font-weight: bold;
    }

    .table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .table tr:hover {
        background: #e0e0e0;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .button {
        flex: 1;
        padding: 10px;
        border: none;
        border-radius: 6px;
        font-size: 0.9rem;
        cursor: pointer;
        font-weight: bold;
        margin: 5px;
        text-transform: uppercase;
        transition: 0.2s;
    }

    .end-round {
        background: black;
        color: white;
    }

    .end-game {
        background: gray;
        color: white;
    }

    .button:hover {
        opacity: 0.85;
    }

    @media (max-width: 768px) {
        .container {
            width: 100%;
            padding: 20px;
        }

        .button-container {
            flex-direction: column;
        }

        .button {
            width: 100%;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="header">
        <h1>LOGO GAME</h1>
        <span class="round-badge">Round - {{ $round }}</span>
    </div>
    <div class="leaderboard">
        <h2>Leaderboard</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Team</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaderboard as $team)
                <tr>
                    <td>{{ $team->rank }}st</td>
                    <td>{{ $team->team_name }}</td>
                    <td>{{ str_pad($team->contribution, 5, '0', STR_PAD_LEFT) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="mt-5 text-left">
        <p>Joined:</p>
        <ul>
            @foreach ($players as $player)
                <li>{{$player}}</li>
            @endforeach
        </ul>
    </div>

    <div class="button-container">
        <form action="{{ route('admin.endRound') }}" method="POST">
            @csrf
            <button type="submit" class="button end-round">End Round</button>
        </form>
        <form action="{{ route('admin.endGame') }}" method="POST">
            @csrf
            <button type="submit" class="button end-game">End Game</button>
        </form>
    </div>
</div>
@endsection
