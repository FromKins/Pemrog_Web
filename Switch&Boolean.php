<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch&Boolean</title>
</head>

<body>
    <h3>Demo menggunakan switch dengan ekspresi boolean</h3>

    <?php
    $x = -4;

    $boolExpr = ($x < 0);

    switch ($boolExpr) {
        case TRUE:
            echo "harga mutlak: " . -$x;
            break;
        case FALSE:
            echo "harga mutlak: " . $x;
            break;
    }
    ?>
</body>

</html>