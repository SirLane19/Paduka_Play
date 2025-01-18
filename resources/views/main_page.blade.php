<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
        .button { padding: 10px 20px; background: black; color: white; border: none; cursor: pointer; margin: 10px; }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
        }
        .popup h2 { margin-top: 0; }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGO GAME</h1>
        <p>Round - 1</p>
        <table>
            <tr>
                <th>Rank</th>
                <th>Team Name</th>
                <th>Contribution</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Team A</td>
                <td>00000</td>
                <td><button class="button" onclick="showTeamDetail()">View Details</button></td>
            </tr>
            <!-- Add more rows as necessary -->
        </table>
        <button class="button" onclick="showScoreResult()">View Score Result</button>
        <button class="button">End Round</button>
        <button class="button">End Game</button>
    </div>

    <!-- Popup Overlay -->
    <div class="overlay" id="overlay" onclick="closePopup()"></div>

    <!-- Team Detail Popup -->
    <div class="popup" id="teamDetailPopup">
        <h2>Team Detail</h2>
        <p>Score: 100</p>
        <p>Contributions: 50%</p>
        <button class="button" onclick="closePopup()">Close</button>
    </div>

    <!-- Score Result Popup -->
    <div class="popup" id="scoreResultPopup">
        <h2>Score Result</h2>
        <p>Final Score: 200</p>
        <button class="button" onclick="closePopup()">Close</button>
    </div>

    <script>
        function showTeamDetail() {
            document.getElementById('teamDetailPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function showScoreResult() {
            document.getElementById('scoreResultPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('teamDetailPopup').style.display = 'none';
            document.getElementById('scoreResultPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
</html>
