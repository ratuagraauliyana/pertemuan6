<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rute Penerbangan</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'data.php'; ?>
    <h1>Pendaftaran Rute Penerbangan</h1>
    <form action="process.php" method="POST">
        <label for="maskapai">Nama Maskapai:</label>
        <input type="text" id="maskapai" name="maskapai" required><br><br>

        <label for="asal">Bandara Asal:</label>
        <select id="asal" name="asal">
            <?php
            foreach ($bandara_asal as $bandara => $pajak) {
                echo "<option value=\"$bandara\">$bandara</option>";
            }
            ?>
        </select><br><br>

        <label for="tujuan">Bandara Tujuan:</label>
        <select id="tujuan" name="tujuan">
            <?php
            foreach ($bandara_tujuan as $bandara => $pajak) {
                echo "<option value=\"$bandara\">$bandara</option>";
            }
            ?>
        </select><br><br>

        <label for="harga">Harga Tiket:</label>
        <input type="number" id="harga" name="harga" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
