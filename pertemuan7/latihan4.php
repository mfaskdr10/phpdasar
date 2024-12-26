<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>

<body>
  <h1>Form Mengirim Nama:</h1>
  <!-- Nilai default action nya adalah kembali ke diri sendiri dan method nya adalah get -->
  <form action="" method="post">
    Masukkan Nama:
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form>
  <?php if (isset($_POST["submit"])): ?>
    <h1>Selamat datang, <?= $_POST["nama"] ?></h1>
  <?php endif; ?>
</body>

</html>