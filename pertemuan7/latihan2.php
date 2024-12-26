<?php
$hero_ml = [
  [
    "icon" => "miya.png",
    "name" => "Miya the Moonlight Archer",
    "role" => "Marksman",
    "speciality" => "Finisher/Damage",
    "lane" => "Gold Lane",
    "region of origin" => "Azrya Woodlands",
    "price" => "10800"
  ],
  [
    "icon" => "balmond.png",
    "name" => "Balmond the Bloody Beast",
    "role" => "Fighter",
    "speciality" => "Damage/Regen",
    "lane" => "Jungling",
    "region of origin" => "The Barren Lands",
    "price" => "6500"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h1>Daftar Hero ML</h1>
  <ul>
    <?php foreach ($hero_ml as $hero): ?>
      <li>
        <a
          href="latihan3.php?name=<?= $hero["name"] ?>&role=<?= $hero['role'] ?>&lane=<?= $hero['lane'] ?>&icon=<?= $hero['icon'] ?>">
          <?= $hero['name']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>