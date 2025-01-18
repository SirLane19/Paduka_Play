<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: row;
            width: 90%;
            max-width: 1200px;
        }

        .team-list {
            background-color: #000;
            color: #fff;
            padding: 20px;
            border-radius: 8px 0 0 8px;
            width: 30%;
        }

        .team-list h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .team-list ul {
            list-style: none;
            padding: 0;
        }

        .team-list ul li {
            padding: 10px;
            background-color: #333;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .team-list ul li.active {
            background-color: #fff;
            color: #000;
            font-weight: bold;
        }

        .content {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 0 8px 8px 0;
            width: 70%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-header h1 {
            font-size: 2rem;
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
            border-radius: 5px;
        }

        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-group-inline .form-group {
            flex: 1;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #333;
        }

        .btn.end {
            background-color: #ccc;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Team List -->
        <div class="team-list">
            <h3>Team</h3>
            <ul>
                <li class="active">Team - 1</li>
                <li>Team - 2</li>
                <li>Team - 3</li>
                <li>Team - 4</li>
                <li>Team - 5</li>
                <li>Team - 6</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="content-header">
                <h1>LOGO GAME</h1>
                <h1>Round - 1</h1>
            </div>

            <!-- Upgrade Facility -->
            <form action="/marketing/upgrade" method="POST">
                @csrf
                <div class="form-group-inline">
                    <div class="form-group">
                        <label for="facility-name">Name</label>
                        <select name="facility-name" id="facility-name" required>
                            <option value="">Select Facility</option>
                            <option value="Facility 1">Facility 1</option>
                            <option value="Facility 2">Facility 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cost">Cost</label>
                        <input type="number" name="cost" id="cost" placeholder="Enter Cost" required>
                    </div>
                </div>
                <button type="submit" class="btn">Upgrade</button>
            </form>

            <!-- Reach Customer -->
            <form action="/marketing/reach" method="POST">
                @csrf
                <div class="form-group">
                    <label for="customer-list">Reach Customer</label>
                    <select name="customer-list" id="customer-list" required>
                        <option value="">Select Customer</option>
                        <option value="Customer 1">Customer 1</option>
                        <option value="Customer 2">Customer 2</option>
                    </select>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn">Next Team</button>
                    <button type="button" class="btn end">End Game</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
