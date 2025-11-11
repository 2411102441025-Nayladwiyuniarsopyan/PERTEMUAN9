<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Saldo Akhir Tabungan</title>
</head>
<body>
    <h2>Hitung Saldo Akhir Tabungan</h2>
    
    <form method="post" action="">
        <label>Saldo Awal (Rp):</label>
        <input type="number" name="saldoAwal" required><br><br>

        <label>Bunga per Bulan (%):</label>
        <input type="number" step="0.01" name="bunga" required><br><br>

        <label>Lama Menabung (bulan):</label>
        <input type="number" name="bulan" required><br><br>

        <input type="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $saldoAwal = $_POST["saldoAwal"];
        $bungaPersen = $_POST["bunga"];
        $bulan = $_POST["bulan"];

        // ubah bunga persen jadi desimal
        $bunga = $bungaPersen / 100;

        // rumus bunga majemuk
        $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Saldo awal: Rp. " . number_format($saldoAwal, 2, ',', '.') . "<br>";
        echo "Bunga per bulan: " . $bungaPersen . "%<br>";
        echo "Lama menabung: " . $bulan . " bulan<br>";
        echo "<strong>Saldo akhir: Rp. " . number_format($saldoAkhir, 2, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>