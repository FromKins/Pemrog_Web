<?php
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}

reset($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";

while (key($arrNilai) !== null) {
    $nama = key($arrNilai);
    $nilai = current($arrNilai);
    echo "Nilai $nama = $nilai<br>";
    next($arrNilai);
}
?>