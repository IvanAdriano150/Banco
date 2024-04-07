<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREACION DE CUENTA</title>
</head>
<body>
    <h3>Creacion de Usuario</h3>
    <form action="{{route('alta')}}" method="POST" enctype="application/x-www-form-urlencoded">
            @csrf
            <label for= "INE/IFE "> INE o IFE </label>
            <input type="text" id="ine_ife" name="ine_ife" required> <br><br>

            <label for= "Nombres "> Nombres </label>
            <input type="text" id="nombres" name="nombres" required> <br><br>

            <label for= "primer_apellido "> Primer Apellido </label>
            <input type="text" id="primer_apellido" name="primer_apellido" required> <br><br>

            <label for= "segundo_apellido"> Segundo Apellido </label>
            <input type="segundo_apellido" id="segundo_apellido" name="segundo_apellido" required> <br><br>

            <label for= "fecha_nacimiento"> Fecha de Nacimiento </label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required> <br><br>

            <label for= "codigo_postal"> Codigo Postal </label>
            <input type="number" id="codigo_postal" name="codigo_postal" required> <br><br>

            <label for= "direccion ">Direccion</label>
            <input type="text" id="direccion" name="direccion" required> <br><br>

            <label for= "nacionalidad ">Nacionalidad</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required> <br><br>

            <label>Sexo</label>
            <select id="lista" name="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select><br><br>

            <label for= "contraseña"> Contraseña </label>
            <input type="password" id="contrasena" name="contrasena" required> <br><br>
            <hr>
            <input type="submit" value="Enviar">

    </form>
</body>
</html>