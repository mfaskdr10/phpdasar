<?php 
// Variable Scope / Lingkup Variabel

$x = 10; 

function tampilX() {
  $y = 20; // Variabel Lokal
  global $x; // Variabel Global
  echo $x;
}

tampilX();

// Variabel SuperGlobals -> array associative
/* 
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SESSION
5. $_COOKIE
6. $_SERVER
7. $_ENV
*/

print_r($_SERVER["SCRIPT_NAME"]);

?>