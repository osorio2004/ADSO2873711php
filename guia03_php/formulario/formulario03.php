<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario usuario</title>
    <link rel="stylesheet" href="./css/formulario03.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar03.php" method="post">
            <h2>Crear usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad">
                    <option value="option0">.</option>
                    <option value="manizales">manizales</option>
                    <option value="chinchina">chinchina</option>
                    <option value="pereira">pereira</option>
                    <option value="armenia">armenia</option>
                    <option value="laDorada">laDorada</option>
                    <option value="cauca">cauca</option>
                    <option value="nariño">nariño</option>
                    <option value="quindio">quindio</option>
                    <option value="tolima">tolima</option>
                    <option value="boyaca">boyaca</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtFecha">Fecha</label>
                <input type="date" name="txtFecha" id="txtFecha">
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>