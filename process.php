<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'data.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $maskapai = $_POST['maskapai'];
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];
        $harga = $_POST['harga'];

        if ($asal === $tujuan) {
            echo "<h2>Bandara asal dan tujuan tidak boleh sama</h2>";
            echo "<a href='index.php'>Kembali ke Form</a>";
            exit;
        }

        $pajak_asal = $bandara_asal[$asal];
        $pajak_tujuan = $bandara_tujuan[$tujuan];
        $total_pajak = $pajak_asal + $pajak_tujuan;
        $total_harga = $harga + $total_pajak;

        echo "<div class='table-container'>"; 
        echo "<h2 class='table-title'>Data Pendaftaran Rute Penerbangan</h2>"; 
        echo "<table border='1'>";
        echo "<tr>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Nama Maskapai</th>
                <th>Asal Penerbangan</th>
                <th>Tujuan Penerbangan</th>
                <th>Harga Tiket</th>
                <th>Total Pajak</th>
                <th>Total Harga Tiket</th>
              </tr>";
        echo "<tr>
                <td>1</td>
                <td>" . date("Y-m-d") . "</td>
                <td>$maskapai</td>
                <td>$asal (Rp$pajak_asal)</td>
                <td>$tujuan (Rp$pajak_tujuan)</td>
                <td>Rp$harga</td>
                <td>Rp$total_pajak</td>
                <td>Rp$total_harga</td>
              </tr>";
        echo "</table>";
        echo "</div>"; 
    }
    ?>
</body>
</html>
