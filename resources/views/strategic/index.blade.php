<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 20px;
            width: 90%;
            max-width: 1000px;
        }

        .team-section {
            background-color: #000;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
        }

        .team-section ul {
            list-style: none;
            padding: 0;
        }

        .team-section li {
            margin: 10px 0;
        }

        .form-section {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            flex: 2;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Team Section -->
        <div class="team-section">
            <h3>Team</h3>
            <ul>
                @foreach ($teams as $team)
                    <li>{{ $team->name }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <h3>Hire</h3>
            <form action="{{ route('strategic.hire') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="cost">Cost</label>
                    <input type="number" name="cost" id="cost" required>
                </div>
                <button type="submit" class="btn">Hire</button>
            </form>

            <h3>Train</h3>
            <form action="{{ route('strategic.train') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="employee_id">Name</label>
                    <select name="employee_id" id="employee_id">
                        @foreach ($teams as $team)
                            @foreach ($team->employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="from">From</label>
                    <input type="number" name="from" id="from" required>
                </div>
                <div class="form-group">
                    <label for="to">To</label>
                    <input type="number" name="to" id="to" required>
                </div>
                <button type="submit" class="btn">Train</button>
            </form>
        </div>
    </div>
</body>
</html>
