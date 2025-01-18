<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Interest</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        .container { max-width: 400px; margin: 0 auto; }
        .interest { margin: 10px 0; }
        .button { padding: 10px 20px; background: black; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOGO GAME</h1>
        <p>Interest</p>
        <form action="/page1/add" method="POST">
            @csrf
            <div class="interest">
                <label>Bunga Kredit Produktif</label>
                <input type="range" name="interest1" min="0" max="100">
            </div>
            <div class="interest">
                <label>Bunga Kredit Konsumtif</label>
                <input type="range" name="interest2" min="0" max="100">
            </div>
            <div class="interest">
                <label>Bunga Dana Pihak Ketiga</label>
                <input type="range" name="interest3" min="0" max="100">
            </div>
            <button type="submit" class="button">Start Game</button>
        </form>
    </div>
</body>
</html>
