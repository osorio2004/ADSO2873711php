<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario02.css">
</head>
<body>
    <div class="info-container">
        <?php
<<<<<<< HEAD
            //Validacion co operador ternario
=======
            //Validacion con operador ternario
>>>>>>> e3fd1cde1151176106ed3e928a6233a51f839a03
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:null;
            $email = isset($_POST["txtEmail"])?$_POST["txtEmail"]:null;
            //Validacion nulo seguro
            $telefono = $_POST["txtTelefono"]?? null;
            $password = $_POST["txtPassword"]?? null;
            echo "<span>Nombre: $nombre</span>";
            echo "<span>email: $email</span>";
            echo "<span>telefono: $telefono</span>";
            echo "<span>contraseña: $password</span>";
        ?>
    </div>
</body>
</html>
