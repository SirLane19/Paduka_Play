@extends('layouts.app')

@section('title', 'Admin - Add Interest')

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
    }

    .container {
        background-color: #fff;
        max-width: 500px;
        width: 90%;
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        number-align: center;
    }

    h1 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        color: black;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .interest-group {
        width: 100%;
        margin-bottom: 15px;
    }

    .interest-group label {
        font-size: 1rem;
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        number-align: left;
    }

    .input-wrapper {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px 10px;
        background: #fff;
    }

    .interest-group input {
        width: 100%;
        padding: 10px;
        border: none;
        font-size: 1rem;
        number-align: right;
        outline: none;
    }

    .input-wrapper span {
        font-size: 1rem;
        margin-left: 5px;
        color: #555;
    }

    .button {
        width: 100%;
        padding: 12px;
        background: black;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .button:hover {
        background: #333;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1>Interest</h1>
    <form action="{{ route('admin.addinterest.add') }}" method="POST">
        @csrf
        <div class="interest-group">
            <label for="interest1">Bunga Kredit Produktif</label>
            <div class="input-wrapper">
                <input type="number" id="interest1" name="interest1" placeholder="Masukkan angka">
                <span>%</span>
            </div>
        </div>
        <div class="interest-group">
            <label for="interest2">Bunga Kredit Konsumtif</label>
            <div class="input-wrapper">
                <input type="number" id="interest2" name="interest2" placeholder="Masukkan angka">
                <span>%</span>
            </div>
        </div>
        <div class="interest-group">
            <label for="interest3">Bunga Dana Pihak Ketiga</label>
            <div class="input-wrapper">
                <input type="number" id="interest3" name="interest3" placeholder="Masukkan angka">
                <span>%</span>
            </div>
        </div>
        <div class="interest-group">
            <label for="interest4">Bunga Penempatan dan Peminjaman Kantor Pusat</label>
            <div class="input-wrapper">
                <input type="number" id="interest4" name="interest4" placeholder="Masukkan angka">
                <span>%</span>
            </div>
        </div>
        <button type="submit" class="button">Start Game</button>
    </form>
</div>
@endsection
