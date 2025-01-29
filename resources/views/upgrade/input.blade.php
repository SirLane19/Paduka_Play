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
        max-width: 750px;
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

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f0f0f0;
        outline: none;
        font-size: 16px;
    }

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
    <div class="header">
        <h1>LOGO GAME</h1>
        <h1>Round - {{ $round }}</h1>
    </div>

    <h2>Upgrade</h2>
    <form action="{{ route('upgrade.store') }}" method="POST">
        @csrf
        <input type="hidden" name="round" value="{{ $round }}">

        <div class="form-group">
            <label for="facility_code">Upgrade Facility</label>
            <input type="text" name="facility_code" placeholder="Enter Code" required>
        </div>

        <div class="button-container">
            <button type="submit" class="button">Next Team</button>
            <button type="button" class="button end-game">END GAME</button>
        </div>
    </form>
</div>
@endsection
