<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Employee</title>
</head>
<body>
    <h1>Hire Employee</h1>

    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div style="color: green; font-weight: bold; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('strategic.hire.store') }}" method="POST">
        @csrf
        <label for="employee_name">Employee Name:</label>
        <input type="text" name="employee_name" id="employee_name" required>

        <label for="cost">Cost:</label>
        <input type="number" name="cost" id="cost" required>

        <button type="submit">Hire</button>
    </form>
</body>
</html>
