<?php
// Built in function utility
echo "<h1>Built in function Utility</h1>";
echo "<hr>";

// var_dump
// mencetak isi dari sebuah variabel, array, object
echo "<h2>var_dump():</h2>";
$nama = "Fadhil";
$umur = 20;
var_dump($nama);
echo "<br>";
var_dump($umur);
echo "<br>";
// output: string(5) "Fadhil" int 20

echo "<h3>mencetak isi array</h3>";
// var_dump juga bisa digunakan untuk mencetak isi dari array dan object
$isi = array("Fadhil", "20");
var_dump($isi);
// output: array(2) { [0]=> string(5) "Fadhil" [1]=> string(2) "20" }

echo "<h3>mencetak isi object</h3>";
// var_dump juga bisa digunakan untuk mencetak isi dari object
$siswa = new stdClass();
$siswa->nama = "Fadhil";
$siswa->umur = 20;
var_dump($siswa);
// output: object(stdClass)#1 (2) { ["nama"]=> string(6) "Fadhil" ["umur"]=> int 20 }

// isset
// mengecek apakah sebuah variabel sudah pernah dibuat atau belum
echo "<h2>isset:</h2>";
$nama = "Fadhil";
var_dump(isset($nama));
echo "<br>";
var_dump(isset($alamat));
echo "<br>";
// output: bool(true) bool(false)

// empty
// mengecek apakah sebuah variabel ada isinya atau tidak
echo "<h2>empty:</h2>";
$nama = "Fadhil";
var_dump(empty($nama));
echo "<br>";
var_dump(empty($alamat));
echo "<br>";
// output: bool(false) bool(true)

// die
// memberhentikan program
echo "<h2>die:</h2>";
echo "Hello World!";
// die;
echo "Hello World!";
// output: Hello World!

// sleep
// memberhentikan program sementara
echo "<h2>sleep:</h2>";
echo "Hello World!";
sleep(10);
echo "Hello World!";

?>