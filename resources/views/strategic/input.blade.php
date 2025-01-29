@extends('layouts.app')

@section('title', 'F. Strategic - Home Page')

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
        max-width: 900px;
        display: flex;
        flex-wrap: wrap;
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

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 1rem;
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

    .form-group input:focus,
    .form-group select:focus {
        border-color: black;
        background: #ffffff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
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

    .submit {
        background: gray;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            width: 100%;
        }

        .sidebar {
            width: 100%;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .content {
            width: 100%;
            border-radius: 0 0 10px 10px;
        }

        .form-grid {
            grid-template-columns: 1fr; /* Semua field menjadi satu kolom di layar kecil */
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

        <h2>Hire</h2>
        <form action="{{ route('strategic.store') }}" method="POST">
            @csrf
            <input type="hidden" name="round" value="{{ $round }}">

            <div class="form-grid">
                <div class="form-group">
                    <label for="hire_name">Name</label>
                    <select name="hire_name" id="hire_name" required>
                        <option value="">Select Hire</option>
                        <option value="Employee 1">Employee 1</option>
                        <option value="Employee 2">Employee 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hire_cost">Cost</label>
                    <input type="number" name="hire_cost" placeholder="Enter Code" required>
                </div>
            </div>

            <h2>Train</h2>
            <div class="form-grid">
                <div class="form-group">
                    <label for="train_name">Name</label>
                    <select name="train_name" id="train_name" required>
                        <option value="">Select Employee</option>
                        <option value="Employee 1">Employee 1</option>
                        <option value="Employee 2">Employee 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="train_from">From</label>
                    <select name="train_from" id="train_from" required>
                        <option value="">Select Trainer</option>
                        <option value="Trainer A">Trainer A</option>
                        <option value="Trainer B">Trainer B</option>
                    </select>
                </div>
            </div>

            <div class="button-container">
                <button type="submit" class="button">Next Team</button>
                <button type="submit" class="button submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
