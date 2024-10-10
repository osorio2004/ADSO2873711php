<?php
$aleatorio = rand(1,999);
echo "el nuero es: $aleatorio <br>";
if($aleatorio >= 50){
    echo "El numero es mayor a 50";
}else{
    echo "El numero es menor  a 50";
}
/*//Generar un valor aleatorio entre el 1  y 999. luego mostrar. Si tiene 1,2 o 3 digitos*/
echo "<br>";
if($aleatorio < 10){
    echo "el numero tiene 1 digito";
}elseif($aleatorio < 100){
    echo "el numero tiene 2 digios";
}else{
    echo "el numero tiene 3 digitos";
}

