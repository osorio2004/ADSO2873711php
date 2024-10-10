<?php
 $fechaActual = date("d-m-Y");
 echo "fecha Actual> $fechaActual";
 echo "<br>";
 echo 'fecha Actual> $fechaActual';
 echo "<br>";
 echo 'fecha Actual> $fechaActual> ' .$fechaActual;
 echo "<br>";
 $dia = date("d");
 $mes = date("m");
 $year = date("Y");
 print("<br>fecha: $dia<br>");
 print("<br>mes: $mes<br>");
 print("<br>año: $year<br>");

 print("<br>ejemeplo:");
 $mes = date("F");
 print("<br>texto del mes: $mes");
 $dia = date("z");
 print("<br>dia del año: $dia");
 $dia = date("w");
 print("<br>el dia de la semana es: $dia");

 if($dia <= 10){
    echo " el sitio esta disponible";
 }else{
    echo " el sitio temporalmente fuera de servicio";
 }