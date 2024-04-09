<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Banco de las Américas</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div class="container">
    <div class="logo">
            <img src="../public/img/logocaja.jpg" alt="Logo del banco">
        </div>
        <div class= "letras">
            <h2>BIENVENIDO</h2>
            <form action="{{ route('valida') }}" method="POST">
            @csrf <!-- Agrega el token CSRF para seguridad -->
            <div class="form-group">
                <label for="ine_ife">INE o IFE</label>
                <input type="text" id="ine_ife" name="ine_ife" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <hr>
            <input type="submit" value="Iniciar sesion">
            </form>
            <hr>
            <div class="final">
            <a href="crear-usuarios"><u>Crear una cuenta</u></a>
            <div>
        </div>
    </div>
</body>
</html>
