<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

// Migración para la tabla de temporadas
public function up()
{
    Schema::create('temporadas', function (Blueprint $table) {
        $table->id();
        $table->integer('ano_inicio');
        $table->integer('ano_fin');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporadas');
    }
};
