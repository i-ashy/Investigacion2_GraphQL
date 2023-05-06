<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipos extends Model
{
    use HasFactory;

    //permite agg
    protected $fillable = ["id","nombre","liga","partidos_jugados","partidos_ganados","partidos_perdidos","puntos_total"];

    //un equipo tiene muchos jugadores
    public function jugador() : HasMany
    {
        return $this->hasMany(Jugadores::class);
    }
}
