@extends('layouts.app')

@section('title', 'Success')

@section('content')
<div class="container">
    <h2>Success!</h2>
    <p>Your data has been submitted successfully.</p>
    <a href="{{ route('game.input') }}" class="button">Go Back</a>
</div>
@endsection
