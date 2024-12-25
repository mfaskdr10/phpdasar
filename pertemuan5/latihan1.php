<?php
echo "<h1>Array</h1>";
echo "<hr>";
// Array
// Variabel yang memiliki banyak nilai
// elemen didalam array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// Membuat array
// Cara lama
echo "<h3>Membuat array dengan cara lama: </h3>";
echo htmlspecialchars("Cara lama: \$hari = array(\"Senin\", \"Selasa\", \"Rabu\");");
$hari = array("Senin", "Selasa", "Rabu");
// Cara baru
echo "<h3>Membuat array dengan cara baru: </h3>";
echo htmlspecialchars("Cara baru: \$bulan = [\"Januari\", \"Februari\", \"Maret\"];");
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", true];

// Menampilkan array
// var_dump() / print_r()
echo "<h3>Cara menampilkan array/mencetak array: </h3>";
echo "<b>menggunakan var_dump(): </b>";
var_dump($hari);
echo "<br>";
echo "<b>menggunakan print_r(): </b>";
print_r($bulan);
echo "<br>";
echo "<b>menggunakan print_r(): </b>";
print_r($arr1);

// Menampilkan 1 elemen array
echo "<h3>Cara menampilkan 1 elemen array: </h3>";
echo $arr1[0];
echo "<br>";
echo $bulan[0];

// Menambahkan elemen baru pada array
echo "<h3>Menambahkan elemen baru pada array: </h3>";
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>