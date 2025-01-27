@extends('layouts.app')

@section('title', 'Paduka Play')

@section('content')
    <div class="">
        <h1>LOGO GAME</h1>
        <div class="button-container">
            <!-- Admin Button -->
            <button class="menu-button" onclick="window.location.href='/admin'">
                <img src="/images/admin_icon.png" alt="Admin Icon">
                <span>Admin</span>
            </button>

            <!-- Player Button -->
            <button class="menu-button" onclick="window.location.href='/player'">
                <img src="/images/player_icon.png" alt="Player Icon">
                <span>Player</span>
            </button>

            <!-- Facilitator Strategist Button -->
            <button class="menu-button" onclick="window.location.href='/facilitator-strategist'">
                <img src="/images/strategist_icon.png" alt="Strategist Icon">
                <span>Facilitator Strategist</span>
            </button>

            <!-- Facilitator Marketing Button -->
            <button class="menu-button" onclick="window.location.href='/facilitator-marketing'">
                <img src="/images/marketing_icon.png" alt="Marketing Icon">
                <span>Facilitator Marketing</span>
            </button>
        </div>
    </div>
@endsection
