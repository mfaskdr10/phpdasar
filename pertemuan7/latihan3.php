<?php
if (
  !isset($_GET["name"]) ||
  !isset($_GET["role"]) ||
  !isset($_GET["lane"]) ||
  !isset($_GET["icon"])
) {
  // redirect
  header("Location: latihan2.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details Hero ML</title>
</head>

<body>
  <h1>Detail Hero</h1>
  <ul>
    <li><img src="../img/<?= $_GET["icon"] ?>" alt="miya.png"></li>
    <li><?= $_GET["name"] ?></li>
    <li><?= $_GET["role"] ?></li>
    <li><?= $_GET["lane"] ?></li>
  </ul>
  <a href="latihan2.php">Kembali ke daftar hero</a>
</body>

</html>