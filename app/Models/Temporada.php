<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    // Modelo de Temporada
public function partidos()
    {
        return $this->hasMany(Partido::class);
    }

    protected $fillable = [
        "id",
        'ano_inicio',
        'ano_fin',
        "created_at",
        "updated_at"
    ];
}
