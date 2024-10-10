<?php
$nombre = "Juan"; //String
$edad = 25; //int
$estado = true; //bool
$peso = 65.5; //double

//Operador ternario
$estadoTxt = ($estado == true)?"Activo":"Inactivo";
//Otra forma para hacerlo
//$estadoTxt = (!$estado == true)?"Inactivo":"Activo";
$output = <<<OUT
    Nombre: $nombre<br>
    Edad: $edad<br>
    Estado: $estadoTxt<br>
    peso: $peso<br>
OUT;
echo $output;

$estaLloviendo = true;

$clima = ($estaLloviendo)?"Esta lloviendo":"Hace sol";
//$clima = (!$estaLloviendo)?"Hace sol":"Esta LLoviendo";
echo "<br>clima: $clima";

//Arrays (Listas)
echo "<br><hr>";
//Array escalar 
$arrayFrutas = ["Mango","Pera","Piña","Kiwi"];
echo $arrayFrutas[2];
echo "<br>";

//Array asociativo
$arrayUsuario =
["nombre"=>"Juan","email"=>"j@gmail.com","edad"=>"20","estado"=>true];
echo "Nombre>".$arrayUsuario['nombre'];

echo "<br><hr>";
$arrayMultiple =
["nombre"=>"Juan","email"=>"j@gmail.com","edad"=>"20","estado"=>true, 365, "SENA",$arrayUsuario,"frutas"=> $arrayFrutas, 9];

echo "<br>Nombre>" .$arrayMultiple["nombre"];
echo "<br>Email>" .$arrayMultiple["email"];
echo "<br>edad>" .$arrayMultiple["edad"];
echo "<br>estado>" .$arrayMultiple["estado"];
echo "<br>Dias de el año>" .$arrayMultiple[0];
echo "<br>Mejor Institucion de Colombia>" .$arrayMultiple[1];
echo "<br>Frutas>" .$arrayMultiple["frutas"][1];
echo "<br>Nombre de la lista de usuario>" .$arrayMultiple[2]["nombre"];
echo "<br>Hoy es: " .$arrayMultiple[3];