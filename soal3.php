<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa Baru Universitas X</h2>

    <form method="post" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempatlahir" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <select name="tgl" required>
            <option value="">Tanggal</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="bln" required>
            <option value="">Bulan</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="thn" required>
            <option value="">Tahun</option>
            <?php
            for ($i = 1980; $i <= 2006; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label>Alamat Rumah:</label><br>
        <textarea name="alamat" rows="4" cols="40" required></textarea><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Pria" required> Pria
        <input type="radio" name="jk" value="Wanita" required> Wanita<br><br>

        <label>Asal Sekolah:</label><br>
        <input type="text" name="sekolah" required><br><br>

        <label>Nilai UAN:</label><br>
        <input type="text" name="nilaiuan" required><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tempat = $_POST["tempatlahir"];
        $tgl = $_POST["tgl"];
        $bln = $_POST["bln"];
        $thn = $_POST["thn"];
        $alamat = $_POST["alamat"];
        $jk = $_POST["jk"];
        $sekolah = $_POST["sekolah"];
        $nilai = $_POSST["nilaiuan"];

        echo "<hr>";
        echo "<h3>Terimakasih $nama sudah mengisi form pendaftaran.</h3>";
        echo "Nama Lengkap : $nama<br>";
        echo "Tempat Lahir : $tempat<br>";
        echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
        echo "Alamat Rumah : $alamat<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Asal Sekolah : $sekolah<br>";
        echo "Nilai UAN : $nilai<br>";
    }
    ?>
</body>
</html>