<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Bangun Datar</title>
</head>
<body>
    <form action="autoloadL.php" method="POST">
        <fieldset>

            <h2>Rumus Lingkaran</h2>
            <label>Jari-jari :</label><br><br>
            <input type="number" name="jari_jari" placeholder="Masukkan jari-jari"><br><br>
            <label>Pi :</label><br><br>
            <input type="text" name="pi" placeholder="Masukkan pi"><br><br>
            <button type="submit" name="lingkaran">Hasil</button>

        </fieldset>
        <br><br>
    </form>
    <form action="autoloadP.php" method="POST">

        <fieldset>

            <h2>Rumus Persegi</h2>
            <label>Sisi :</label><br><br>
            <input type="number" name="sisi" placeholder="Masukkan sisi"><br><br>
            <button type="submit" name="persegi">Hasil</button>

        </fieldset>
        <br><br>

    </form>

    <form action="autoloadS.php" method="POST">

        <fieldset>

            <h2>Rumus Segitiga</h2>
            <label>Alas :</label><br><br>
            <input type="number" name="alas" placeholder="Masukkan alas"><br><br>
            <label>Tinggi :</label><br><br>
            <input type="number" name="tinggi" placeholder="Masukkan tinggi"><br><br>
            <button type="submit" name="segitiga">Hasil</button>

        </fieldset>
        <br><br>
    </form>
</body>
</html>
