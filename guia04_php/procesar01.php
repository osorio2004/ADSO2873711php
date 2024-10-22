<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario01.css">
</head>
<body>
    <div class="info-container">
        <?php
            $numero1 = $_POST['txtNumero1'] ?? null; //operador nulo seguro
            $numero1 = $numero1==""?0:$numero1;
            
            $numero2 = isset($_POST['txtNumero2']) ? $_POST['txtNumero2']: null;//operador ternario
            $numero2 = $numero2==""?0:$numero2;

                print("<h5>numero 1: $numero1</h5>");
                print("<h5>numero 2: $numero2</h5>");

            if(isset($_POST['operacion1'])&& $_POST['operacion1']=="sumar"){
                $suma = $numero1 + $numero2;
                print("<label>La suma es: $suma</label>");
            }
            if(isset($_POST['operacion2'])&& $_POST['operacion2']=="restar"){
                $resta = $numero1 - $numero2;
                print("<label>La resta es: $resta</label>");
            }
            if(isset($_POST['operacion3'])&& $_POST['operacion3']=="multiplicar"){
                $multiplicar = $numero1 * $numero2;
                print("<label>La multilicacion es: $multiplicar</label>");
            }
            if(isset($_POST['operacion4'])&& $_POST['operacion4']=="dividir"){
                if($numero2 == 0){
                    echo "No se puede realizar division por cero";
                }else{
                    $division = $numero1 / $numero2;
                    print("<label>la division es: $division</label>");
                }
            }
        ?>
    </div>
</body>
</html>