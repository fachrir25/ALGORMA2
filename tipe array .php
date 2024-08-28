<?php
//cara membuat indexed array
$minuman = array("<p>Kopi", "<p>Teh", "<p>Jus Jeruk");
array("kopi");
array("Teh");
array("Jus jeruk");

//mengakses elemen array
echo $minuman  = "<p>kopi"; //output:kopi
echo $minuman = "<p>Teh"; //output:Teh
echo $minuman  = "<p>Jus jeruk"; //output:jus jeruk
//menampilkan seluruh isi array
print_r($minuman);

$makanan = ["Nasi Goreng", "Soto", "Bubur"];
array("nasi goreng");
array("soto");
array("bubur");

echo $makanan  = "<p>Nasi goreng"; //output:NasiA goreng
echo $makanan = "<p>soto"; //output:soto
echo $makanan  = "<p>bubur"; //output:bubur

print_r($makanan);

echo "<p><br><strong>By fachri </strong>";
?>