<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TramiteController;

Route::get('/', function () {
    return view('home');
});
Route::get('listar-usuarios',[UsuarioController::class,'index'])->name('lista');
Route::get('crear-usuarios',[UsuarioController::class,'create'])->name('crear');
Route::post('agregar-usuarios',[UsuarioController::class,'store'])->name('alta');
Route::get('mostrar-usuarios/{usuario}',[UsuarioController::class,'show'])->name('mostrar');
Route::get('editar-usuarios/{usuario}',[UsuarioController::class,'edit'])->name('editar');
Route::put('actualiza-usuarios/{usuario}',[UsuarioController::class,'update'])->name('actualiza');
Route::delete('destruir-usuarios/{usuario}',[UsuarioController::class,'destroy'])->name('destruir');

Route::post('agregar-tramite',[TramiteController::class,'store'])->name('tramite');


Route::post('validar-usuarios', [UsuarioController::class, 'validate'])->name('valida');
Route::get('usuario-inicio/{usuario}',[UsuarioController::class, 'inicio'])->name('login');

