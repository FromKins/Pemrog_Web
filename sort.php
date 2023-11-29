<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Pengurutan
        untuk mengakses elemen array</title>
</head>

<body>
    <?php
    function judul()
    {
        echo "<h2>Demo mengurutkan array " .
            "menggunakan fungsi sort</h2>";
    }

    judul();

    $suku = array(
        "Jawa", "Sunda", "Batak",
        "Minang", "Dayak"
    );

    echo "<strong>Sebelum diurutkan : </strong><br />";
    foreach ($suku as $key => $value) {
        echo "$key: $value" . "<br />";
    }

    sort($suku);

    echo "<br /><strong>Setelah diurutkan : </strong><br />";
    foreach ($suku as $key => $value) {
        echo "$key: $value" . "<br />";
    }
    ?>
</body>

</html>