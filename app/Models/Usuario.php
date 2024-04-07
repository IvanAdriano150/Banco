<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable= [ 'ine_ife','nombres', 'primer_apellido', 
    'segundo_apellido', 'fecha_nacimiento','sexo','nacionalidad',
    'codigo_postal','direccion','contrasena','rol'];
    public function tramite()
    {
        return $this->hasOne(Tramite::class);
    }

}
