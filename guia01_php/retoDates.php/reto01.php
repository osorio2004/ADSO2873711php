<?php
    date_default_timezone_set('America/Bogota');
    setlocale(LC_TIME, 'Spanish_Spain.1252');
    $dia = strftime("%A");
    $diaNumero = date("d");
    $mes = strftime("%B");
    $year = date("Y");
    $hora = date('h:i');
    echo "Hola hoy es $dia $diaNumero de $mes del $year y son las $hora";
