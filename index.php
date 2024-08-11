<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kelompok 5</title>
    <link rel="stylesheet" type="text/css" href="./asset/stylel.css">
</head>

<body>
    <?php
    $hasil="";
     
    if(isset($_POST['hitung'])){
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];
        $operasi = $_POST['operasi'];

        if (is_numeric($var1) && is_numeric($var2)) {
            switch ($operasi) {
                case 'tambah':
                    $hasil = $var1 + $var2;
                    break;
                case 'kurang':
                    $hasil = $var1 - $var2;
                    break;
                case 'kali':
                    $hasil = $var1 * $var2;
                    break;
                case 'bagi':
                    if ($var2 != 0) {
                        $hasil = $var1 / $var2;
                    } else {
                        $hasil = '0';
                    }
                    break;
                default:
                    $hasil = 'Operasi tidak valid!';
                    break;          
            }
        } else {
            $hasil = 'Variabel Harus Berupa Angka';
        }
    }
?>

    <div class="container">
        <h2>Kalkulator Sederhana</h2>

        <form method="post" action="">
            <input type="number" name="var1" placeholder="Angka 1" required>
            <select name="operasi" required>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">:</option>
            </select>
            <input type="number" name="var2" placeholder="Angka 2" required>

            <button type="submit" name="hitung">Hitung</button>

            <input type="text" class="hasil" value="<?php echo htmlspecialchars($hasil); ?>" placeholder="Hasil" readonly>
        </form>
    </div>

</body>
</html>
