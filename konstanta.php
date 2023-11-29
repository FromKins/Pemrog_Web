<?php 
// mendefinisikan konstanta define
define('MAKSIMAL', 1000);
define('NAMA_PERUSAHAAN', "PT.Multidimension Group");
define('PI', 3.1416);

//mencetak nilai konstanta ke layar browser
echo MAKSIMAL . "<br />";
echo NAMA_PERUSAHAAN . "<br />";

//menggunakan konstanta dalam perhitungan
$jarijari = 2;
$luaslingkaran = PI * $jarijari * $jarijari;
echo "Luas Lingkaran = " . $luaslingkaran;
?>