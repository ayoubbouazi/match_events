<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    // Modelo de Partido
    protected $fillable = ['temporada_id', 'equipo_local', 'equipo_visitante', 'goles_local', 'goles_visitante','fecha', 'hora','updated_at', 'created_at'];

public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
