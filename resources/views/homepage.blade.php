@extends('layouts.app')

@section('title', 'Paduka Play')

@section('style')
    <style>
        .menu-box {
            background: #EBE9E9;
            border-radius: 15px;
            padding: 0;
            text-decoration: none;
            color: #000;
        }

        .menu-box:hover {
            cursor: pointer;
            filter: contrast(1.5);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .box-1 {
            background: #000;
            width: 50px;
            color: #fff;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-2 {
            margin-left: 15px;
        }

        .box-1,
        .box-2 {
            padding: 10px;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <div class="container p-3">
        <div class="h1 text-uppercase text-center mb-5" style="font-size: 3em">Logo Game</div>
        <div class="row d-flex flex-column justify-content-center align-items-center gap-3 px-5">
            <a href="{{ route('login') }}" class="menu-box col d-flex flex-row">
                <div class="box-1 text-center">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="box-2">
                    Admin
                </div>
            </a>
            <a href="{{ route('player.create') }}" class="menu-box col d-flex flex-row">
                <div class="box-1 text-center">
                    <i class="bi bi-person"></i>
                </div>
                <div class="box-2">
                    Player
                </div>
            </a>
            <a href="{{route('strategic.input')}}" class="menu-box col d-flex flex-row">
                <div class="box-1 text-center">
                    <i class="bi bi-pencil"></i>
                </div>
                <div class="box-2">
                    Facilitator Srategist
                </div>
            </a>
            <a href="{{ route('marketing.input') }}" class="menu-box col d-flex flex-row">
                <div class="box-1 text-center">
                    <i class="bi bi-bank"></i>
                </div>
                <div class="box-2">
                    Facilitator Marketing
                </div>
            </a>
        </div>
    </div>
@endsection
