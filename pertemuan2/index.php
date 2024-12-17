<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// A. Standar Output
/* 
1. echo
2. print
3. print_r (digunakan untuk mencetak Array)
4. var_dump (digunakan untuk melihat detail dari sebuah variabel)
*/
// Contoh:
echo "<h1>Standar Output</h1>";

echo "<h3>Menggunakan echo:</h3>";
echo "Muhammad Fadhil Alvan Syah";

print "<h3>Menggunakan print:</h3>";
print "Muhammad Fadhil Alvan Syah";

echo "<h3>Menggunakan print_r:</h3>";
print_r(value: "Muhammad Fadhil Alvan Syah");

echo "<h3>Menggunakan var_dump:</h3>";
var_dump(value: "Muhammad Fadhil Alvan Syah");
echo "<hr />";

// B. Penulisan PHP
/* 
1. PHP didalam HTML
2. HTML didalam PHP
*/

// C. Variabel
echo "<h1>Variabel</h1>";
/* 
Aturan penulisan variabel:
1. Tidak boleh menggunakan angka di depan variabel
2. Tidak boleh menggunakan spasi di dalam variabel
3. Tidak boleh menggunakan simbol di dalam variabel
4. Tidak boleh menggunakan tanda baca di dalam variabel
*/
$nama = "Fadhil";
$jurusan1 = "TKJ";
$jurusan2 = "RPL";

// Interpolasi akan bejalan dengan menggunakan kutip 2
echo "Halo selamat datang $nama dan seya jurusan $jurusan1 dan $jurusan2";
echo "<hr />";

// D. Operator
echo "<h1>Operator</h1>";
/*
1. Aritmatika
    + - * / %
2. Penggabung string (concat)
    .
3. Assignment
    =, +=, -=, *=, /=, %=, .=
4. Perbandingan
    <, >, <=, >=, ==, !=
5. Identitas
    ===, !==
6. Logika
    &&, ||, !
*/

// Contoh Aritmatika
$x = 10;
$y = 20;
echo "<h2>Operator aritmatika</h2>";
echo "<h3>Penjumlahan:</h3>";
echo "variabel x = 10, variabel y = 20 hasilnya" . " " . $x + $y;
echo "<h3>Pengurangan:</h3>";
echo "variabel x = 10, variabel y = 20 hasilnya" . " " . $x - $y;
echo "<h3>Perkalian:</h3>";
echo "variabel x = 10, variabel y = 20 hasilnya" . " " . $x * $y;
echo "<h3>Pembagian:</h3>";
echo "variabel x = 10, variabel y = 20 hasilnya" . " " . $x / $y;
echo "<h3>Modulus:</h3>";
echo "variabel x = 10, variabel y = 20 hasilnya" . " " . $x % $y;

// Contoh penggabung string
echo "<h2>Operator penggabung string</h2>";
$nama_depan = "Muhammad Fadhil";
$nama_belakang = "Alvan Syah";

echo $nama_depan . " " . $nama_belakang;

// Contoh Assignment
echo "<h2>Operator Asignment</h2>";
$a = 1;
$a += 5;
echo $a;
echo "<br />";

$nama_saya = "Fadhil";
$nama_saya .= " ";
$nama_saya .= "Alvan Syah";
echo $nama_saya;

// Contoh Perbandingan
echo "<h2>Operator Perbandingan</h2>";
$x = 10;
$y = 20;
echo "<h3>Sama dengan:</h3>";
var_dump(1 == "1");
echo "<h3>Lebih Besar:</h3>";
var_dump($x > $y);
echo "<h3>Lebih Kecil:</h3>";
var_dump($x < $y);
echo "<h3>Tidak sama dengan:</h3>";
var_dump($x != $y);

// Contoh Identitas
echo "<h2>Operator Identitas</h2>";
var_dump(1 === "1");

// Contoh Logika
echo "<h2>Operator Logika</h2>";
$and = 20;
var_dump($and > 10 && $and % 2 == 0);
echo "<br />";
$or = 20;
var_dump($and < 10 && $and % 2 == 0);

echo "<hr />";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan 2</title>
</head>

<body>
  <h1>Penulisan PHP di dalam HTML</h1>
  <h2>Halo Selamat Datang <?php echo $nama; ?></h2>
  <p><?php echo "ini adalah website dibuat dengan PHP" ?></p>
</body>

</html>