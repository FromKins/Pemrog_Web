<!DOCTYPE html>
<html>

<head>
    <title>If dua kondisi</title>
</head>

<body>
    <form method="post" action="">
        Masukkan Angka (1-10): <input type="text" name="angka">
        <input type="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST["angka"])) {
        $angka = $_POST["angka"];
        if ($angka < 1 || $angka > 10) {
            echo "Anda memasukkan bilangan $angka.<br />";
            echo "ERROR: Bilangan harus " .
                "dalam rentang 1 sampai 10.";
        } else {
            echo "Bilangan yang anda masukkan adalah $angka";
        } 
    }
    ?>
</body>

</html>