<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .loader {
            border: 6px solid #f3f3f3;
            /* Light grey */
            border-top: 6px solid #000;
            /* Black */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <h1>Waiting for Center<br>To Start a Game</h1>
    <div class="loader"></div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let interval = setInterval(checkGameStatus, 3000); // Cek setiap 3 detik

            function checkGameStatus() {
                fetch('{{route('all.getStatus')}}')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Game Status:", data.status);
                        if (data.status === "started") {
                            clearInterval(interval); // Hentikan polling
                            window.location.href = "{{route('game.success')}}"; // Redirect ke game
                        }
                    })
                    .catch(error => console.error("Error checking game status:", error));
            }
        });
    </script>


</body>

</html>
