<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario04.css">
</head>
<body>
    <div class="info-container">
        <?php
            $numero1 = $_POST['txtNumero1']?? 0;
            $numero2 = $_POST['txtNumero2']?? 0;
            $operacion = $_POST['operacion']?? "";
            $resultado = null;

            if($operacion == "sumar"){
                $resultado = $numero1 + $numero2;
            }elseif($operacion == "restar"){
                $resultado = $numero1 - $numero2;
                echo "<span>El resultado de $operacion $numero1 y $numero2 es: $resultado</span>";
            }else{
                echo "no hay operacion";
            }
        ?>
    </div>
</body>
</html>