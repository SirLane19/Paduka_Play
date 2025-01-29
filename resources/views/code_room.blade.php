@extends('layouts.app')

@section('title', 'Paduka Play')

@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 20px;
        background-color: #f5f5f5;
        color: #333;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
        color: black;
        font-weight: bold;
    }

    p {
        font-size: 16px;
        margin-bottom: 15px;
        color: #666;
    }

    .input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        color: black;
        background-color: #f9f9f9;
    }

    .input:focus {
        border-color: black;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .button {
        width: 100%;
        padding: 12px;
        background: black;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s ease;
    }

    .button:hover {
        background: #333;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1>Paduka Play</h1>
    <p>Masukkan kode room untuk bergabung</p>
    <form action="/login" method="POST">
        @csrf
        <input type="text" class="input" name="code" placeholder="Enter Code" required>
        <button type="submit" class="button">Enter</button>
    </form>
</div>
@endsection
