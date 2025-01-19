<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            color: #000;
            border-radius: 8px;
            padding: 20px;
            width: 800px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 1.5rem;
        }

        .header h2 {
            font-size: 1.25rem;
        }

        .team-list {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 8px;
            width: 200px;
        }

        .team-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .team-list li {
            padding: 10px;
            cursor: pointer;
            background-color: #333;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        .team-list li:hover {
            background-color: #555;
        }

        .team-list .active {
            background-color: #fff;
            color: #000;
        }

        .form-container {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            margin-left: 20px;
        }

        .form-container h3 {
            margin-top: 0;
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container .button-group {
            display: flex;
            justify-content: space-between;
        }

        .form-container button {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container .next-btn {
            background-color: #000;
            color: #fff;
        }

        .form-container .end-btn {
            background-color: #ccc;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LOGO GAME</h1>
            <h2>Round - 1</h2>
        </div>
        <div style="display: flex; gap: 20px;">
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
            <div class="form-container">
                <h3>Upgrade</h3>
                <label for="upgrade-name">Name</label>
                <select id="upgrade-name" name="upgrade-name">
                    <option value="">Select Upgrade</option>
                </select>
                <label for="upgrade-cost">Cost</label>
                <input type="text" id="upgrade-cost" name="upgrade-cost" placeholder="Enter Code">
                <h3>Reach Customer</h3>
                <label for="reach-customer">From</label>
                <select id="reach-customer" name="reach-customer">
                    <option value="">Select Customer</option>
                </select>
                <div class="button-group">
                    <button type="button" class="next-btn">Next Team</button>
                    <button type="button" class="end-btn">End Game</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
