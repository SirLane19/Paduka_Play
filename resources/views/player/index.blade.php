<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .team-container {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            width: 100%;
            max-width: 800px;
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

        .btn:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <h1>Player Page</h1>

    @foreach ($teams as $team)
        <div class="team-container">
            <h3>{{ $team->name }}</h3>
            <form action="{{ route('player.storeCredits', $team->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="type">Credit Type</label>
                    <select name="credits[0][type]" required>
                        <option value="Kredit Konsumtif">Kredit Konsumtif</option>
                        <option value="Kredit Produktif">Kredit Produktif</option>
                        <option value="Giro">Giro</option>
                        <option value="Pinjaman KP">Pinjaman KP</option>
                        <option value="Asuransi">Asuransi</option>
                        <option value="Kartu Kredit">Kartu Kredit</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="credits[0][amount]" required>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    @endforeach
</body>
</html>
