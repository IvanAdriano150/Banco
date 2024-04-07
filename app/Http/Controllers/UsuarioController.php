<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $usuarios = Usuario::all();
     
        if($request->expectsJson())
            return $usuarios->toJson();
        else
            return view('lista-usuarios',compact('usuarios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) //crear 1
    {
        return view('crearsesion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
        $valores = $request->all();
        dump($valores);
        $nuevo = new Usuario();
        $nuevo->ine_ife = $valores['ine_ife'];
        $nuevo->nombres = $valores['nombres'];
        $nuevo->primer_apellido = $valores['primer_apellido'];
        $nuevo->segundo_apellido = $valores['segundo_apellido'];
        $nuevo->fecha_nacimiento = $valores['fecha_nacimiento'];
        $nuevo->codigo_postal = $valores['codigo_postal'];
        $nuevo->direccion = $valores['direccion'];
        $nuevo->nacionalidad = $valores['nacionalidad'];
        $nuevo->sexo = $valores['sexo'];
        $nuevo->contrasena = $valores['contrasena'];
        $nuevo->rol = 'Usuario';
        $nuevo->save();
        return redirect(route('lista'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
        echo "nombre:" . $usuario->nombres . "<br>";
        echo "apellido_paterno:" . $usuario->primer_apellido . "<br>";
        echo "apellido_materno:" . $usuario->segundo_apellido . "<br>";
        echo "ine_ife: ".$usuario->ine_ife . "<br>";
        echo "genero:" . $usuario->sexo . "<br>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
        return view('editarsesion',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
        $valores = $request->all();
        dump($valores);
        $usuario->fill($valores);
        $usuario->save();
        return redirect(route('lista'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
        echo "borrar a $usuario->nombres , $usuario->primer_apellido, $usuario->segundo_apellido";
        $usuario->delete();
        return redirect(route('lista'));
    }
}
