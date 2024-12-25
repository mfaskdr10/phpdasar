<?php
// Array Associative
// Key nya adalah string yang dibuat sendiri
$students = [
  [
    "nama" => "Muhammad Fadhil",
    "nisn" => "0074692929",
    "jurusan" => "Teknik Komputer dan Jaringan",
    "email" => "mfaskdr10@gmail.com",
  ],

  [
    "nama" => "Alvan Syah",
    "nisn" => "0074692828",
    "jurusan" => "Teknik Komputer dan Jaringan",
    "email" => "mfaskdr100@gmail.com"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Siswa</title>
</head>

<body>
  <h1>Daftar Siswa</h1>
  <?php foreach ($students as $student): ?>
    <ul>
      <li>Nama: <?php echo $student["nama"] ?></li>
      <li>NISN: <?php echo $student["nisn"] ?></li>
      <li>Jurusan: <?php echo $student["jurusan"] ?></li>
      <li>Email: <?php echo $student["email"] ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>