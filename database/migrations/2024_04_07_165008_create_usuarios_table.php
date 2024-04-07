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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('ine_ife');
            $table->index('ine_ife');
            $table->string('nombres')->nullable()->default(null);
            $table->string('primer_apellido')->nullable()->default(null);
            $table->string('segundo_apellido')->nullable()->default(null);
            $table->enum('sexo',['Masculino' , 'Femenino']);
            $table->string('nacionalidad')->nullable()->default(null);
            $table->string('codigo_postal')->nullable()->default(null);
            $table->string('direccion')->nullable()->default(null);
            $table->string('contrasena')->nullable()->default(null);
            $table->date('fecha_nacimiento');
            $table->enum('rol',['Usuario','Admin']) -> default('Usuario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
