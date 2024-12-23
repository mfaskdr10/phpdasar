<?php
// Built in function Date/Time

echo "<h1>Built in function Date/Time</h1>";
echo "<hr>";

// Date
// untuk menampilkan tanggal dengan format tertentu
echo "<h2>Date:</h2>";
echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo "<h2>Time:</h2>";
echo time();

// Latihan Time dan date
echo "<h2>Latihan Time dan date</h2>";
$day100 = date("d M Y", time() + 60 * 60 * 24 * 100);
echo "100 hari kedepan adalah hari: $day100";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo "<h2>Mktime:</h2>";
echo mktime(0, 0, 0, 10, 24, 2007);

// Latihan mktime dan date
echo "<h2>Latihan mktime dan date</h2>";
echo date("l", mktime(0, 0, 0, 10, 24, 2007));

// strtotime
echo "<h2>strtotime:</h2>";
echo strtotime("24 Oct 2007");

// Latihan strtotime dan date
echo "<h2>Latihan Time dan date</h2>";
echo date("l", strtotime("24 Oct 2007"));
?>