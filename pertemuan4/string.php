<?php
// Built in function String
echo "<h1>Built in function String</h1>";
echo "<hr>";

// strlen
// menghitung panjang sebuah string
echo "<h2>strlen:</h2>";
echo strlen("Hello World!");
echo "<br>";

// strcmp
// membandingkan dua buah string
// jika sama maka akan menghasilkan nilai 0
echo "<h2>strcmp:</h2>";
var_dump(strcmp("Hello", "Hello"));
echo "<br>";
var_dump(strcmp("Hello", "World"));
echo "<br>";

// explode
// memecah sebuah string menjadi array
echo "<h2>explode:</h2>";
var_dump(explode(" ", "Hello World !"));
echo "<br>";

// htmlspecialchars
// mengubah karakter khusus menjadi entitas HTML
echo "<h2>htmlspecialchars:</h2>";
echo htmlspecialchars("<h1>Hello World!</h1>");
echo "<br>";

?>