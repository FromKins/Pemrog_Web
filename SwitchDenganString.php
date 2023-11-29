<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Dengan String</title>
</head>

<body>
    <h3>Demo menggunakan switch dengan ekspresi string</h3>

    <?php
    $pilihan = "lima";

    switch ($pilihan) {
        case "satu":
            echo "pilihan ke-1";
            break;
        case "dua":
            echo "pilihan ke-2";
            break;
        case "tiga":
            echo "pilihan ke-3";
            break;
        case "empat":
            echo "pilihan ke-4";
            break;
        case "lima":
            echo "pilihan ke-5";
            break;
        default:
            echo "Pilihan default";
    }
    ?>
</body>

</html>