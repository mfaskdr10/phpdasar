<?php
$students = [
  ["Muhammad Fadhil", "0074692929", "Teknik Komputer dan Jaringan", "mfaskdr10@gmail.com"],

  ["Alvan Syah", "0074692828", "Teknik Komputer dan Jaringan", "mfaskdr100@gmail.com"],


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
      <li>Nama: <?= $student[0]; ?></li>
      <li>NISN: <?= $student[1]; ?></li>
      <li>Jurusan: <?= $student[2]; ?></li>
      <li>Email: <?= $student[3]; ?></li>
    </ul>
  <?php endforeach; ?>

</body>

</html>