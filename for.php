<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Pengulangan For</title>
</head>

<body>
    <h3>Demo Pengulangan menggunakan struktur For</h3>

    <form method="post">
        Masukkan sebuah bilangan bulat positif :
        <input type="text" name="n" value="10">
        <input type="submit">
    </form>

    <br />
    <?php
    if (isset($_POST["n"])) {
        $n = $_POST["n"];
        $jumlah = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i != $n) {
                echo "$i + ";
            } else {
                echo "$i = ";
            }
            $jumlah += $i;
        }
        echo $jumlah;
    }
    ?>
</body>

</html>