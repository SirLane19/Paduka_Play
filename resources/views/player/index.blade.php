<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Home Page</title>
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
            padding: 20px 30px;
            width: 900px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 1.8rem;
            margin: 0;
        }

        .header h2 {
            font-size: 1.2rem;
            margin: 0;
        }

        .form-container {
            background-color: #f4f4f4;
            padding: 30px;
            border-radius: 8px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-row .column {
            flex: 1;
            margin-right: 20px;
        }

        .form-row .column:last-child {
            margin-right: 0;
        }

        .form-container h3 {
            margin-top: 0;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .submit-btn {
            display: block;
            width: 150px;
            margin: 20px auto 0;
            padding: 10px 15px;
            background-color: #ccc;
            color: #000;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
        }

        .submit-btn:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LOGO GAME</h1>
            <h2>Round - 1</h2>
        </div>

        <div class="form-container">
            <form action="#" method="POST">
                <!-- Kredit Section -->
                <div>
                    <h3>Kredit</h3>
                    <div class="form-row">
                        <div class="column">
                            <label for="kredit-konsumtif">• Kredit Konsumtif</label>
                            <input type="number" id="kredit-konsumtif" name="kredit_konsumtif" placeholder="Enter Number">

                            <label for="kartu-kredit">• Kartu Kredit</label>
                            <input type="number" id="kartu-kredit" name="kartu_kredit" placeholder="Enter Number">
                        </div>
                        <div class="column">
                            <label for="kredit-produktif">• Kredit Produktif</label>
                            <input type="number" id="kredit-produktif" name="kredit_produktif" placeholder="Enter Number">
                        </div>
                    </div>
                </div>

                <!-- Asuransi and Pinjaman KP Section -->
                <div class="form-row">
                    <div class="column">
                        <h3>Asuransi</h3>
                        <input type="number" id="asuransi" name="asuransi" placeholder="Enter Number">
                    </div>
                    <div class="column">
                        <h3>Pinjaman KP</h3>
                        <input type="number" id="pinjaman-kp" name="pinjaman_kp" placeholder="Enter Number">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
