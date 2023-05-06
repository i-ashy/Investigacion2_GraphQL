<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugadores extends Model
{
    use HasFactory;

    public function equipo() : BelongsTo
    {
        return $this->belongsTo(Equipos::class);
    }
}
