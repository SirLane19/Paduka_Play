<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #000;
            color: white;
            padding: 15px;
            width: 100%;
            max-width: 350px;
            cursor: pointer;
            text-align: left;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #444;
            transform: translateY(-2px);
        }

        .button img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .button span {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGO GAME</h1>
        <div class="button-container">
            <!-- Admin Button -->
            <button class="button" onclick="window.location.href='/admin'">
                <img src="/images/admin_icon.png" alt="Admin Icon">
                <span>Admin</span>
            </button>

            <!-- Player Button -->
            <button class="button" onclick="window.location.href='/player'">
                <img src="/images/player_icon.png" alt="Player Icon">
                <span>Player</span>
            </button>

            <!-- Facilitator Strategist Button -->
            <button class="button" onclick="window.location.href='/facilitator-strategist'">
                <img src="/images/strategist_icon.png" alt="Strategist Icon">
                <span>Facilitator Strategist</span>
            </button>

            <!-- Facilitator Marketing Button -->
            <button class="button" onclick="window.location.href='/facilitator-marketing'">
                <img src="/images/marketing_icon.png" alt="Marketing Icon">
                <span>Facilitator Marketing</span>
            </button>
        </div>
    </div>
</body>
</html>
