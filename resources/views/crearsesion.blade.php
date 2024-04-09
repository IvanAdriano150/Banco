<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREACION DE CUENTA</title>
    <link rel="stylesheet" href="./css/crearsesion.css">
</head>
<body>
    <div class="container">
        <h3>Creacion de Usuario</h3>
        <form action="{{route('alta')}}" method="POST" enctype="application/x-www-form-urlencoded">
            @csrf
            <div class="input-group">
                <label for="ine_ife"> INE o IFE </label>
                <input type="text" id="ine_ife" name="ine_ife" required>
            </div>

            <div class="input-group">
                <label for="nombres"> Nombres </label>
                <input type="text" id="nombres" name="nombres" required>
            </div>

            <div class="input-group">
                <label for="primer_apellido"> Primer Apellido </label>
                <input type="text" id="primer_apellido" name="primer_apellido" required>
            </div>

            <div class="input-group">
                <label for="segundo_apellido"> Segundo Apellido </label>
                <input type="text" id="segundo_apellido" name="segundo_apellido" required>
            </div>

            <div class="input-group">
                <label for="fecha_nacimiento"> Fecha de Nacimiento </label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <div class="input-group">
                <label for="codigo_postal"> Codigo Postal </label>
                <input type="number" id="codigo_postal" name="codigo_postal" required>
            </div>

            <div class="input-group">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="input-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" id="nacionalidad" name="nacionalidad" required>
            </div>

            <div class="input-group">
                <label>Sexo</label>
                <select id="lista" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>

            <div class="input-group">
                <label for="contrasena"> Contraseña </label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <hr>
            <div class=final>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
