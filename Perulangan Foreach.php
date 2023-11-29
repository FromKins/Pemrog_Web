<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Foreach</title>
</head>

<body>
    <h3>Demo pengulangan menggunakan struktur foreach</h3>
    <?php
    $pegawai = array(
        "manajer" => "Aas",
        "dirut" => "Jajang",
        "umum" => "Dadan",
        "teknisi" => "Renra"
    );

    foreach ($pegawai as $nama) {
        echo "Hallo, $nama<br />";
    }
    ?>
</body>

</html>