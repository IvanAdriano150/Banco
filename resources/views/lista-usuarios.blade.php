<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>


<table border="1">
  <thead>
    <th>#</th>
    <th>Nombre</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @forelse ($usuarios as $elemento)
        <tr>
          <td> {{$loop->iteration}} </td>
          <td> {{$elemento->nombres}}, {{$elemento->primer_apellido}}, {{$elemento->segundo_apellido}}</td>
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