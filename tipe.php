<?php  
$nim = "9882405121111023";
$nama = 'Riki Cahya Saputra';
$umur = 21;
$nilai = 82.25;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "NAMA : $nama<br>";
print "Umur :" . $umur; print "<br>";
printf("Nilai : %.3f<br>",$nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
?>