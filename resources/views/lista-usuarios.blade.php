<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>


<table border="10">
  <thead>
    <th>INE</th>
    <th>Nombre</th>
    <th>ROL</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @forelse ($usuarios as $elemento)
        <tr>
          <td> {{$elemento->ine_ife}} </td>
          <td> {{$elemento->nombres}}, {{$elemento->primer_apellido}}, {{$elemento->segundo_apellido}}</td>
          <td> {{$elemento->rol}}</td>
          <td> 
            <a href="{{route('mostrar',$elemento->id)}}">mostrar</a>  
            <a href="{{route('editar',$elemento->id)}}">editar</a>  
            <form action="{{route('destruir',$elemento->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="borrar">
            </form>

          </td>
        </tr>
    @empty
        
    @endforelse


  </tbody>
</table>
<br><br><br>

<a href="{{route('crear')}}">CREAR UN NUEVO USUARIO</a>


</body>
</html>