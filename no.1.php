<?php
if (isset($_POST['bilangan'])) {
    $bilangan = (int) $_POST['bilangan'];

    if ($bilangan > 0) {
        $pesan = "Bilangan positif";
    } elseif ($bilangan == 0) {
        $pesan = "Bilangan nol";
    } else {
        $pesan = "Bilangan negatif";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Jenis Bilangan</title>
</head>
<body>
    <h2>Cek Jenis Bilangan</h2>
    <form method="post">
        <label>Masukkan bilangan bulat:</label><br>
        <input type="number" name="bilangan" 
               value="<?php echo isset($_POST['bilangan']) ? $_POST['bilangan'] : ''; ?>" 
               required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if (isset($pesan)) {
        echo "<p><b>Hasil:</b> $pesan</p>";
    }
    ?>

    <hr>
    <form method="get">
        <input type="submit" value="Reset">
    </form>

    <br>
    <a href="index.php"><button>Kembali ke Menu Utama</button></a>
</body>
</html>
