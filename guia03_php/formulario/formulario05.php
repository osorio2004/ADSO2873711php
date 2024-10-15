<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario usuario</title>
    <link rel="stylesheet" href="./css/formulario05.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar05.php" method="post">
            <h2>Crear usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtCedula">Cedula</label>
                <input type="Cedula" name="txtCedula" id="txtCedula">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group1">
                <h3>Estudios</h3>
                <h4>No tiene estudios</h4>
                <label><input type="radio" name="opcion1" id="opcion1" value="opcion1">opcion1</label>
                <h4>Estudios primarios</h4>
                <label>opcion2</label>
                <input type="radio" name="opcion2" id="opcion2" value="opcion2">
                <h4>Estudios estudios secundarios</h4>
                <label>opcion3</label>
                <input type="radio" name="opcion3" id="opcion3" value="opcion3">
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>