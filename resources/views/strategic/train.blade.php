<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Employee</title>
</head>
<body>
    <h1>Train Employee</h1>
    <form action="{{ route('strategic.train.store') }}" method="POST">
        @csrf
        <label for="employee_name">Employee Name:</label>
        <input type="text" name="employee_name" id="employee_name" required>

        <label for="from">From Level:</label>
        <input type="number" name="from" id="from" required>

        <label for="to">To Level:</label>
        <input type="number" name="to" id="to" required>

        <label for="cost">Cost:</label>
        <input type="number" name="cost" id="cost" required>

        <button type="submit">Train</button>
    </form>
</body>
</html>
