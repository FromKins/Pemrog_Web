<!DOCTYPE html>
<html>

<head>
    <title>If dua kondisi</title>
</head>

<body>
    <form method="post" action="">
        Masukkan sebuah bilangan bulat : <input type="text" name="bilangan">
        <input type="submit" value="Kirim">
    </form>

    <?php
    // if (isset($_POST["bilangan"])) {
    $bilangan = $_POST["bilangan"];
    if ($bilangan % 2 == 0) {
        echo "$bilangan adalah bilangan GENAP. <br />";
    } else {
        echo "$bilangan adalah bilangan GANJIL.";
    }
    //}
    ?>
</body>

</html>