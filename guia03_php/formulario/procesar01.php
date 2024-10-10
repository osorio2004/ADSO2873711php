<?php
//Arrays asociativos nativos a php
/*
$_POST: array asociativo qeu almacena las variables enviadas por el metodo POST
    $_POST['txtNombre']

$_GET: Es un array asociativo que almacena las variables enviadas por motodo GET
    $_GET['txtEmail']

$_REQUEST: array asociativo que almacena variables de ambos (GET, POST, COOKIE)
    $_REQUEST['txtTelefono']
*/

$nombre = $_POST['txtNombre'];
print("Nombre: $nombre");