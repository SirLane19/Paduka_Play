<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Interest</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            width: 400px;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .interest-group {
            width: 100%;
            margin-bottom: 20px;
        }

        .interest-group label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        .interest-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            text-align: right;
        }

        .button {
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        .button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Interest</h1>
        <form action="/page1/add" method="POST">
            @csrf
            <div class="interest-group">
                <label for="interest1">Bunga Kredit Produktif</label>
                <input type="text" id="interest1" name="interest1" placeholder="%">
            </div>
            <div class="interest-group">
                <label for="interest2">Bunga Kredit Konsumtif</label>
                <input type="text" id="interest2" name="interest2" placeholder="%">
            </div>
            <div class="interest-group">
                <label for="interest3">Bunga Dana Pihak Ketiga</label>
                <input type="text" id="interest3" name="interest3" placeholder="%">
            </div>
            <div class="interest-group">
                <label for="interest4">Bunga Penempatan dan Peminjaman Kantor Pusat</label>
                <input type="text" id="interest4" name="interest4" placeholder="%">
            </div>
            <button type="submit" class="button">Start Game</button>
        </form>
    </div>
</body>
</html>
