@extends('layouts.app')

@section('title', 'F. Marketing - Home Page')

@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 20px;
    }

    .container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        width: 90%;
        max-width: 800px;
        display: flex;
    }

    .sidebar {
        background-color: black;
        color: white;
        width: 25%;
        padding: 20px;
        border-radius: 10px 0 0 10px;
    }

    .sidebar h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .team-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .team-list li {
        padding: 10px;
        cursor: pointer;
        font-size: 1rem;
        opacity: 0.7;
    }

    .team-list li.active {
        font-weight: bold;
        opacity: 1;
    }

    .content {
        background: #e0e0e0;
        padding: 30px;
        border-radius: 0 10px 10px 0;
        width: 75%;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 1.8rem;
        font-weight: bold;
    }

    h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f0f0f0;
        outline: none;
        font-size: 16px;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .button {
        flex: 1;
        padding: 12px;
        background: black;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s ease;
        margin: 5px;
    }

    .button:hover {
        background: #333;
        transform: scale(1.05);
    }

    .end-game {
        background: gray;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="sidebar">
        <h2>Team</h2>
        <ul class="team-list">
            @foreach ($teams as $team)
                <li class="{{ $team === $currentTeam ? 'active' : '' }}">{{ $team }}</li>
            @endforeach
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h1>LOGO GAME</h1>
            <h1>Round - {{ $round }}</h1>
        </div>

        <h2>Upgrade</h2>
        <form action="{{ route('marketing.store') }}" method="POST">
            @csrf
            <input type="hidden" name="round" value="{{ $round }}">

            <div class="form-group">
                <label for="upgrade_name">Name</label>
                <select name="upgrade_name" id="upgrade_name" required>
                    <option value="">Select Upgrade</option>
                    <option value="Feature 1">Feature 1</option>
                    <option value="Feature 2">Feature 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="upgrade_cost">Cost</label>
                <input type="number" name="upgrade_cost" placeholder="Enter Code" required>
            </div>

            <h2>Reach Customer</h2>
            <div class="form-group">
                <label for="reach_customer">From</label>
                <select name="reach_customer" id="reach_customer" required>
                    <option value="">Select Customer</option>
                    <option value="Region A">Region A</option>
                    <option value="Region B">Region B</option>
                </select>
            </div>

            <div class="button-container">
                <button type="submit" class="button">Next Team</button>
                <button type="button" class="button end-game">END GAME</button>
            </div>
        </form>
    </div>
</div>
@endsection
