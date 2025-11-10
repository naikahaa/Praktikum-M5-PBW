<!DOCTYPE html>
<html>
<head>
    <title>Angka Lebih dari 10</title>
</head>
<body>
    <h2>Angka Lebih dari 10</h2>

    <form method="post">
        <p>Masukkan 5 angka (pisahkan dengan spasi):</p>
        <input type="text" name="angka" 
               value="<?php echo isset($_POST['angka']) ? $_POST['angka'] : ''; ?>" 
               required>
        <input type="submit" value="Cek">
    </form>

    <br>
    <?php
    if (isset($_POST['angka'])) {
        $input = trim($_POST['angka']);
        $angka = explode(" ", $input);
        echo "<b>Angka lebih dari 10:</b><br>";

        $ada = false;
        foreach ($angka as $nilai) {
            if ((int)$nilai > 10) {
                echo $nilai . " ";
                $ada = true;
            }
        }

        if (!$ada) {
            echo "Tidak ada angka yang lebih dari 10.";
        }
    }
    ?>

<br>
    <a href="index.php"><button>Kembali ke Menu Utama</button></a>
</body>
</html>
