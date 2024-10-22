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
            //Validacion co operador ternario
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:null;
            $email = isset($_POST["txtEmail"])?$_POST["txtEmail"]:null;
            //Validacion nulo seguro
            $telefono = $_POST["txtTelefono"]?? null;
            $ciudad = $_POST["txtCiudad"]?? null;
            $fecha = $_POST["txtFecha"]?? null;
            $edad = $_POST["txtEdad"]?? null;
            echo "<span>Nombre: $nombre</span>";
            echo "<span>email: $email</span>";
            echo "<span>telefono: $telefono</span>";
            echo "<span>ciudad: $ciudad</span>";
            echo "<span>Fecha: $fecha</span>";

            // Calculamos la edad si la fecha de nacimiento está definida
            if (!empty($fecha)) {
                // Función para calcular la edad
                function calcularEdad($fechaNacimiento) {
                    $fechaNacimiento = new DateTime($fechaNacimiento);
                    $hoy = new DateTime();
                    $intervalo = $hoy->diff($fechaNacimiento);
                    return $intervalo->y;
                }

                $edad = calcularEdad($fecha);
            } else {
                $edad = "Fecha de nacimiento no proporcionada";
            }

            echo "<span>Edad: $edad</span>";
            if($edad >= 18){
                echo "Es mayor de edad";
            }elseif($edad < 18 && $edad != null){
                echo "Es menor de edad";
            }
        ?>
    </div>
</body>
</html>