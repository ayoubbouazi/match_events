<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

// Migración para la tabla de partidos
public function up()
{
    Schema::create('partidos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('temporada_id');
        $table->foreign('temporada_id')->references('id')->on('temporadas');
        $table->string('equipo_local');
        $table->string('equipo_visitante');
        $table->integer('goles_local');
        $table->integer('goles_visitante');
        $table->date('fecha');
        $table->time('hora');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
