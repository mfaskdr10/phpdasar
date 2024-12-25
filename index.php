<?php
$hero_ml = [
  [
    "icon" => "miya.png",
    "name" => "Miya, the Moonlight Archer",
    "role" => "Marksman",
    "speciality" => "Finisher/Damage",
    "lane" => "Gold Lane",
    "region of origin" => "Azrya Woodlands",
    "price" => "10800"
  ],
  [
    "icon" => "balmond.png",
    "name" => "Balmond, the Bloody Beast",
    "role" => "Fighter",
    "speciality" => "Damage/Regen",
    "lane" => "Jungling",
    "region of origin" => "The Barren Lands",
    "price" => "6500"
  ],
  [
    "icon" => "saber.png",
    "name" => "Saber, the Wandering Sword",
    "role" => "Assassin",
    "speciality" => "Charge/Finisher",
    "lane" => "Jungling/Roaming",
    "region of origin" => "Laboratory 1718",
    "price" => "6500"
  ],
  [
    "icon" => "alice.png",
    "name" => "Alice, the Queen of Blood",
    "role" => "Mage/Tank",
    "speciality" => "Charge/Regen",
    "lane" => "EXP Lane/Jungling",
    "region of origin" => "The Barren Lands",
    "price" => "15000"
  ],
  [
    "icon" => "nana.png",
    "name" => "Nana, the Sweet Leonin",
    "role" => "Mage",
    "speciality" => "Poke/Burst",
    "lane" => "Mid Lane",
    "region of origin" => "Azrya Woodlands",
    "price" => "6500"
  ],
  [
    "icon" => "tigreal.png",
    "name" => "Tigreal, the Warrior of Dawn",
    "role" => "Tank",
    "speciality" => "Crowd Control",
    "lane" => "Roaming",
    "region of origin" => "Moniyan Empire",
    "price" => "6500"
  ],
  [
    "icon" => "alucard.png",
    "name" => "Alucard, the Demon Hunter",
    "role" => "Fighter/Assassin",
    "speciality" => "Chase/Damage",
    "lane" => "Jungling",
    "region of origin" => "Moniyan Empire",
    "price" => "15000"
  ],
  [
    "icon" => "karina.png",
    "name" => "Karina, the Shadow Blade",
    "role" => "Assassin",
    "speciality" => "Finisher/Magic Damage",
    "lane" => "Jungling",
    "region of origin" => "Azrya Woodlands",
    "price" => "32000"
  ],
  [
    "icon" => "akai.png",
    "name" => "Akai, the Panda Warrior",
    "role" => "Tank",
    "speciality" => "Guard/Crowd Control",
    "lane" => "Roaming/Jungling",
    "region of origin" => "Cadia Riverlands",
    "price" => "32000"
  ],
  [
    "icon" => "franco.png",
    "name" => "Franco, the Frozen Warrior",
    "role" => "Tank",
    "speciality" => "Initiator/Control",
    "lane" => "Roaming",
    "region of origin" => "Northern Vale",
    "price" => "32000"
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Hero ML</title>
</head>

<body>
  <h1>Daftar Hero Mobile Legends</h1>
  <?php foreach ($hero_ml as $hero): ?>
    <ul>
      <li>Icon: <img src="img/<?= $hero['icon']; ?>" alt="<?= $hero['icon']; ?>"></li>
      <li>Name: <?= $hero["name"]; ?></li>
      <li>Lane: <?= $hero["lane"]; ?></li>
      <li>Role: <?= $hero["role"]; ?></li>
      <li>Speciality: <?= $hero["speciality"]; ?></li>
      <li>Region of origin: <?= $hero["region of origin"]; ?></li>
      <li>Price: <?= $hero["price"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>