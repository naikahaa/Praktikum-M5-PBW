<!DOCTYPE html>
<html>
<head>
    <title>Pola Bintang Segitiga</title>
</head>
<body>
    <h2>Pola Bintang Segitiga</h2>

    <form method="post">
        <label>Masukkan tinggi segitiga:</label><br>
        <input type="number" name="tinggi" 
               value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>" 
               required>
        <input type="submit" value="Tampilkan Pola">
    </form>

    <?php
    if (isset($_POST['tinggi'])) {
        $tinggi = (int) $_POST['tinggi'];

        echo "<h3>Output:</h3>";

        // Membentuk segitiga sama kaki
        for ($i = 1; $i <= $tinggi; $i++) {
            // Cetak spasi sebelum bintang
            for ($spasi = $tinggi - $i; $spasi > 0; $spasi--) {
                echo "&nbsp;&nbsp;";
            }

            // Cetak bintang
            for ($bintang = 1; $bintang <= (2 * $i - 1); $bintang++) {
                echo "*";
            }

            echo "<br>";
        }
    }
    ?>

    <hr>
    <a href="index.php"><button>Kembali ke Menu Utama</button></a>
</body>
</html>
