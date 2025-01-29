<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cek Session</title>
</head>
<body>
    <h1>Cek Session Game</h1>

    <button onclick="checkSession()">Cek Session</button>

    <script>
        // Function untuk memeriksa session
        function checkSession() {
            fetch('/check-session', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log('Game Token:', data.game_token);
                console.log('Player Name:', data.player_name);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
