<?php
// Pengulangan
// for, while, do-while


echo "<h1>Pengulangan (for, while, do-while)</h1>";


// For
echo "<h2>Pengulangan menggunakan for</h2>";
for ($i = 1; $i <= 5; $i++) {
  echo "Hello for <br>";
}
;

// While
echo "<h2>Pengulangan menggunakan while</h2>";
$i = 0;
while ($i <= 5) {
  echo "Hello While <br>";
  $i++;
}
;

// Do.. While
echo "<h2>Pengulangan menggunakan do... while</h2>";
$i = 0;
do {
  echo "Hello do while <br>";
  $i++;
} while ($i <= 5);

?>