<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <label for="bilangan1">Bilangan Pertama:</label><br>
        <input type="number" id="bilangan1" name="bilangan1" required><br><br>

        <label for="bilangan2">Bilangan Kedua:</label><br>
        <input type="number" id="bilangan2" name="bilangan2" required><br><br>

        <label for="operator">Pilih Operasi:</label><br>
        <select id="operator" name="operator" required>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case "tambah":
                $hasil = $bilangan1 + $bilangan2;
                $operasi = "+";
                break;
            case "kurang":
                $hasil = $bilangan1 - $bilangan2;
                $operasi = "-";
                break;
            case "kali":
                $hasil = $bilangan1 * $bilangan2;
                $operasi = "*";
                break;
            case "bagi":
                if ($bilangan2 != 0) {
                    $hasil = $bilangan1 / $bilangan2;
                    $operasi = "/";
                } else {
                    echo "Error: Pembagian dengan nol!";
                    exit();
                }
                break;
            default:
                echo "Operasi tidak valid!";
                exit();
        }

        echo "<h2>Hasil Perhitungan</h2>";
        echo "<p>$bilangan1 $operasi $bilangan2 = $hasil</p>";
    }
    ?>
</body>
</html>
