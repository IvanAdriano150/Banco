<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Banco de las Américas</title>
</head>
<body>
    <h2>INICIO DE SESIÓN</h2>
    <form action="{{ route('valida') }}" method="POST">
        @csrf <!-- Agrega el token CSRF para seguridad -->
        <label for="ine_ife">INE o IFE</label>
        <input type="text" id="ine_ife" name="ine_ife" required><br><br>
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <hr>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <a href="crear-usuarios"><u>CREAR UNA SESIÓN</u></a>
</body>
</html>