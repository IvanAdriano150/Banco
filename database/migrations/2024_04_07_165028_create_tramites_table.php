<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_ine_ife'); // Cambiado de ine_ife a usuario_ine_ife
            $table->enum('estado',['Aceptado', 'Rechazado', 'Pendiente'])->default('Pendiente');
            $table->text('razon_cuenta');
            $table->timestamps();
    
            // Define la restricción de clave externa después de haber creado el campo
            $table->foreign('usuario_ine_ife')->references('ine_ife')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
