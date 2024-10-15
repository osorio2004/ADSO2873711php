<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario03.css">
</head>
<body>
    <div class="info-container">
        <?php
            //Validacion con operador ternario
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:null;
            $email = isset($_POST["txtEmail"])?$_POST["txtEmail"]:null;
            //Validacion nulo seguro
            $telefono = $_POST["txtTelefono"]?? null;
            $cedula = $_POST["txtCedula"]?? null;
            $edad = $_POST["txtEdad"]?? null;
            $opcion1 = $_POST['opcion1']?? 0;
            $opcion2 = $_POST['opcion2']?? 0;
            $opcion3 = $_POST['opcion3']?? 0;
            echo "<span>Nombre: $nombre</span>";
            echo "<span>cedula: $cedula</span>";
            echo "<span>telefono: $telefono</span>";
            echo "<span>email: $email</span>";
            echo "<span>email: $email</span>";

            if($opcion1 == "opcion1"){
                echo "<span>$nombre No tiene estudios</span>";
            }elseif($opcion2 == "opcion2"){
                echo "<span>$nombre Tiene estudios primarios</span>";
            }elseif($opcion3 == "opcion3"){
                echo "<span>$nombre Tiene estudios secundarios</span>";
            }else{
                echo "<span>$nombre No puso su estado</span>";
            }
        ?>
    </div>
</body>
</html>