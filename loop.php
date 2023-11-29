<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Pengulangan
        untuk mengakses elemen array
    </title>
</head>

<body>

    <?php
    function judul()
    {
        echo "<h2>Demo menggunakan pengulangan " .
            "untuk mengakses elemen array</h2>";
    }

    judul();

    $suku = array(
        "Jawa", "Sunda", "Batak",
        "Minang", "Dayak"
    );

    echo "Beberapa suku di Indonesia : <br />";
    for ($i = 0; $i < sizeof($suku); $i++) {
        echo $suku[$i] . "<br />";
    }

    $pegawai = array(
        "dirut" => 'Fredi',
        "manager" => 'Santoso',
        "marketing" => 'Shinta'
    );

    echo "<br />Pegawai perusahaan XYZ : <br />";
    foreach ($pegawai as $jabatan => $nama) {
        echo "<strong>$jabatan:</strong>" .
            $nama . "<br />";
    }

    ?>

</body>

</html>