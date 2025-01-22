<?php
$x = 5; // global scope

function test1() {
  // usando x dentro a questa funzione causa errore
  echo "<p>Variabile x dentro questa funzione: $x</p>";
}
test1();

echo "<p>Variabile x fuori dalla funzione: $x</p>";
?>

<?php
function test2() {
  $y = 5; // local scope
  echo "<p>Variabile y dentro la funzione: $y</p>";
}
test2();

// usando y fuori dalla funzione genera errore
echo "<p>Variabile y fuori dalla funzione: $y</p>";
?>

<?php
$k = 5;
$z = 10;

function test3() {
  global $k, $z;
  $z = $k + $z;
}

test3();
echo $z; // outputs 15

// stesso comportamento di test3() con altro metodo di accesso alle variabili globali
function test4() {
  $GLOBALS['z'] = $GLOBALS['k'] + $GLOBALS['z'];
}

test4();
echo $z; // outputs 20
?>