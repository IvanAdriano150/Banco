<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    protected $fillable = ['ine/ife','estado','razon_cuenta'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
