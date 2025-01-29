@extends('layouts.app')

@section('title', 'Success')

@section('content')
<div class="container">
    <h2>Success!</h2>
    <p>Your upgrade has been recorded successfully.</p>
    <a href="{{ route('upgrade.input') }}" class="button">Go Back</a>
</div>
@endsection
