<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Page</title>
</head>
<body>
    <h1>Team Page</h1>

    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div style="color: green; font-weight: bold; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('strategic.submit') }}" method="POST">
        @csrf
        <label for="team">Select Team:</label>
        <select name="team" id="team">
            <option value="Team 1">Team 1</option>
            <option value="Team 2">Team 2</option>
            <option value="Team 3">Team 3</option>
            <option value="Team 4">Team 4</option>
            <option value="Team 5">Team 5</option>
            <option value="Team 6">Team 6</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <a href="{{ route('strategic.hire') }}">Hire Employee</a>
    <a href="{{ route('strategic.train') }}">Train Employee</a>
</body>
</html>
