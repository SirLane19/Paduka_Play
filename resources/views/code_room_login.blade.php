<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        .container { max-width: 400px; margin: 0 auto; }
        .input { width: 100%; padding: 10px; margin: 10px 0; }
        .button { padding: 10px 20px; background: black; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGO GAME</h1>
        <p>Code Room</p>
        <form action="/login" method="POST">
            @csrf
            <input type="text" class="input" name="code" placeholder="Enter Code" required>
            <button type="submit" class="button">Enter</button>
        </form>
    </div>
</body>
</html>
