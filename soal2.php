<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Pecahan Uang</title>
</head>
<body>
    <h2>Hitung Pecahan Uang</h2>

    <form method="post" action="">
        <label>Masukkan Jumlah Uang (Rp):</label>
        <input type="number" name="jumlahUang" required><br><br>

        <input type="submit" value="Hitung Pecahan">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahuang = $_POST["jumlahUang"];

        // Proses perhitungan pecahan
        $a = intval($jumlahuang / 100000);
        $jumlahuang = $jumlahuang % 100000;

        $b = intval($jumlahuang / 50000);
        $jumlahuang = $jumlahuang % 50000;

        $c = intval($jumlahuang / 20000);
        $jumlahuang = $jumlahuang % 20000;

        $d = intval($jumlahuang / 5000);
        $jumlahuang = $jumlahuang % 5000;

        $e = intval($jumlahuang / 100);
        $jumlahuang = $jumlahuang % 100;

        $f = intval($jumlahuang / 50);

        echo "<h3>Hasil Pecahan:</h3>";
        echo "Rp 100.000 : " . $a . " lembar<br>";
        echo "Rp 50.000 : " . $b . " lembar<br>";
        echo "Rp 20.000 : " . $c . " lembar<br>";
        echo "Rp 5.000 : " . $d . " lembar<br>";
        echo "Rp 100 : " . $e . " keping<br>";
        echo "Rp 50 : " . $f . " keping<br>";
    }
    ?>
</body>
</html>