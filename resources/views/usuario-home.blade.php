<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO SESION</title>
</head>
<body>
    <h3>BIENVENIDO <span id = "loginId">{{ $usuario->nombres }}</span></h3>

    <form action="{{route('tramite')}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="input-group">
            <label for="ine">INE/IFE:</label>
            <span>{{ $usuario->ine_ife }}</span>
            <input type="hidden" id="ine" name="ine" value="{{ $usuario->ine_ife }}">
        </div>
        <div class="input-group">
                <label for="tramite">¿Porque deseas iniciar tu tramite?</label>
                <input type="text" id="tramite" name="tramite" required>
        </div>
        <div class=final>
                <input type="submit" value="Iniciar tramite Ahora">
            </div>
    </form>

</body>
</html>