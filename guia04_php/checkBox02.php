<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/formulario02.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar02.php" method="post">
            <h2>Deportes</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <legend>seleccione los deportes</legend>
                <label><input type="checkbox" name="deportes[]" value="futbol">futbol</label>
                <label><input type="checkbox" name="deportes[]" value="baloncesto">baloncesto</label>
                <label><input type="checkbox" name="deportes[]" value="voleibol">voleibol</label>
                <label><input type="checkbox" name="deportes[]" value="natacion">natacion</label>
                <label><input type="checkbox" name="deportes[]" value="ajedrez">ajedres</label>
                <label><input type="checkbox" name="deportes[]" value="tenis de mesa">tenis de mesa</label>
                <label><input type="checkbox" name="deportes[]" value="tenis">tenis</label>
                <label><input type="checkbox" name="deportes[]" value="baseball">baseball</label>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>