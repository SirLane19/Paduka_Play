@extends('layouts.app')

@section('title', 'F. Strategic - Hire & Train')

@section('style')
<style>
    body {
        font-family: 'Arial', sans-serif;
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
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        width: 90%;
        max-width: 800px;
        text-align: center;
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
        font-size: 1.4rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
        text-align: left;
    }

    .form-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .form-group select,
    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background: #f9f9f9;
        outline: none;
        font-size: 16px;
        transition: 0.3s ease-in-out;
    }

    .form-group select:focus,
    .form-group input:focus {
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
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s ease;
        margin: 5px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .button:hover {
        background: #333;
        transform: scale(1.05);
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 768px) {
        .container {
            width: 100%;
            padding: 20px;
        }

        .form-container {
            grid-template-columns: 1fr;
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
        <h1>Round - {{ $round }}</h1>
    </div>

    <form action="{{ route('strategic.hire_train.store') }}" method="POST">
        @csrf
        <input type="hidden" name="round" value="{{ $round }}">

        <h2>Select Team</h2>
        <div class="form-group">
            <select name="team" id="team" required>
                <option value="">Select Team</option>
                @foreach ($teams as $team)
                    <option value="{{ $team }}">{{ $team }}</option>
                @endforeach
            </select>
        </div>

        <h2>Hire</h2>
        <div class="form-container">
            <div class="form-group">
                <label for="hire_name">Name</label>
                <select name="hire_name" id="hire_name" required>
                    <option value="">Select Employee</option>
                    <option value="Employee 1">Employee 1</option>
                    <option value="Employee 2">Employee 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hire_cost">Cost</label>
                <input type="number" name="hire_cost" placeholder="Enter Cost" required>
            </div>
        </div>

        <h2>Train</h2>
        <div class="form-container">
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
                    @foreach ($trainers as $trainer)
                        <option value="{{ $trainer }}">{{ $trainer }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="button-container">
            <button type="submit" class="button">Submit</button>
        </div>
    </form>
</div>
@endsection
