@extends('layouts.app')

@section('title', 'Player - Home Page')

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
        text-align: center;
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

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f0f0f0;
        outline: none;
        font-size: 16px;
        transition: border 0.3s ease;
    }

    .form-group input:focus {
        border-color: black;
        background: #ffffff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .button {
        width: 100%;
        padding: 12px;
        background: black;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s ease;
        margin-top: 20px;
    }

    .button:hover {
        background: #333;
        transform: scale(1.05);
    }

    /* Responsive */
    @media (max-width: 600px) {
        .form-grid {
            grid-template-columns: 1fr;
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

    <h2>Input Data</h2>

    <form action="{{ route('game.store') }}" method="POST">
        @csrf
        <input type="hidden" name="round" value="{{ $round }}">

        <div class="form-grid">
            <div class="form-group">
                <label>Kredit Konsumtif</label>
                <input type="number" name="kredit_konsumtif" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Kredit Produktif</label>
                <input type="number" name="kredit_produktif" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Penempatan Pusat</label>
                <input type="number" name="penempatan_pusat" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Giro</label>
                <input type="number" name="giro" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Pinjaman Pusat</label>
                <input type="number" name="pinjaman_pusat" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Asuransi</label>
                <input type="number" name="asuransi" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Kartu Kredit</label>
                <input type="number" name="kartu_kredit" placeholder="Enter Number" required>
            </div>
            <div class="form-group">
                <label>Bintang</label>
                <input type="number" name="bintang" placeholder="Enter Number" required>
            </div>
        </div>

        <button type="submit" class="button">Submit</button>
    </form>
</div>
@endsection
