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
        $nombre = $_POST["txtNombre"]?? "";
        $deportes = $_POST["deportes"];
        $cantidadDeportes = count($deportes);

        $htmlDportes = "";
        foreach($deportes as $item){
            $htmlDportes .= "<label>$item</label>";
            //echo "Deporte: $item";
        }
        //Heredoc
        $output = <<<ADSO
            <label><h4>Nombre:</h4> $nombre</label>
            <label><h4>Cantidad de deportes:</h4> $cantidadDeportes</label>
            <label><h4>los deportes seleccionados</h4></label>
            $htmlDportes
        ADSO;
        echo $output;
        /* echo "<hr><pre>";
        print_r($deportes);
        echo "</pre>"; */
        ?>
    </div>
</body>
</html>