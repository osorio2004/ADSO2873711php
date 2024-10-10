<?php
//Mostrar la tabla de multiplicar de el 2

$nMul = 2;
$nMax = 10;
$n = 1;

for ($i=0; $i < $nMax; $i++) { 
    echo "<br>".($i+1)." X ".$nMul." = ".(($i+1)*$nMul);
}
echo "<hr>";
while ($n <= $nMax) {
    echo "<br>".($n)." X ".$nMul." = ".(($n)*$nMul);
    $n++;
}
$n = 1;
echo "<hr>";
do {
    echo "<br>".($n)." X ".$nMul." = ".(($n)*$nMul);
    $n++;
} while ($n <= $nMax);