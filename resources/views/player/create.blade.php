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
    }

    .wrapper {
        width: 100%;
        max-width: 600px; /* Sesuaikan dengan area tengah */
        background: #d9d9d9;
        padding: 50px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .container {
        background-color: #e0e0e0;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 90%;
        max-width: 450px; /* Agar pas dengan kotak tengah */
    }

    h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .icon-selection {
        display: flex;
        justify-content: center;
        gap: 10px; /* Jarak antar ikon lebih rapi */
        margin-bottom: 20px;
    }

    .icon {
        width: 60px;
        height: 60px;
        background: gray;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 24px;
        color: white;
    }

    .icon:hover {
        background: #bdbdbd;
    }

    .selected {
        background: black !important;
        color: white;
    }

    .input-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 15px;
    }

    .input-group label {
        font-weight: bold;
        width: 80px;
        text-align: left;
    }

    input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f0f0f0;
        outline: none;
        font-size: 16px;
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
        transition: background 0.3s ease;
    }

    .button:hover {
        background: #333;
    }
</style>
@endsection

@section('content')
<div class="wrapper">
    <div class="container">
        <h2>Choose Icon Team</h2>

        <form action="{{ route('player.store') }}" method="POST">
            @csrf
            <div class="icon-selection">
                <div class="icon" onclick="selectIcon('icon1')">X</div>
                <div class="icon" onclick="selectIcon('icon2')">X</div>
                <div class="icon" onclick="selectIcon('icon3')">X</div>
                <div class="icon" onclick="selectIcon('icon4')">X</div>
            </div>

            <input type="hidden" name="icon" id="selectedIcon">

            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Name" required>
            </div>

            <button type="submit" class="button">Let's Start</button>
        </form>
    </div>
</div>

<script>
    function selectIcon(icon) {
        document.getElementById('selectedIcon').value = icon;
        document.querySelectorAll('.icon').forEach(el => el.classList.remove('selected'));
        event.target.classList.add('selected');
    }
</script>
@endsection
