<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario04.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar04.php" method="post">
            <h2>Control radio</h2>
            <div class="form-group">
                <label for="txtNumero1">Numero 1</label>
                <input type="text" name="txtNumero1" id="txtNumero1">
            </div>
            <div class="form-group">
                <label for="txtNumero2">Numero 2</label>
                <input type="text" name="txtNumero2" id="txtNumero2">
            </div>
            <div class="form-group">
                <label for="">Sumar</label>
                <input type="radio" name="operacion" id="operacion" value="sumar">
                <label for="">Restar</label>
                <input type="radio" name="operacion" id="operacion" value="restar">
            </div>
            <div class="form-group">
                <button type="submit">Realizar opreracion</button>
            </div>
        </form>
    </div>
</body>
</html>