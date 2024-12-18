<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Pengulangan</title>
  <style>
    .warna_baris {
      background-color: silver;
    }

    .warna_kolom {
      background-color: silver;
    }
  </style>
</head>

<body>
  <h1>Latihan Pengkondisian</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <?php if ($i % 2 == 1): ?>
        <tr class="warna_baris">
        <?php else: ?>
        <tr>
        <?php endif ?>
        <?php for ($j = 1; $j <= 5; $j++): ?>
          <?php if ($j % 2 == 1): ?>
            <td><?= "$i,$j" ?> </td>
          <?php else: ?>
            <td class="warna_kolom"><?= "$i,$j" ?> </td>
          <?php endif ?>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
</body>

</html>