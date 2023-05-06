<?php

namespace Database\Factories;

use App\Models\Jugadores;
use App\Models\Equipos;
use Illuminate\Database\Eloquent\Factories\Factory;

class JugadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "equipo_id"=>Equipos::factory(),
            "nombre"=>$this->faker->text(50),
            "apellido"=>$this->faker->text(50),
            "edad"=>$this->faker->randomDigitNot(2),
            "goles_marcados"=>$this->faker->randomDigitNot(2),
            "tarjetas_amarillas"=>$this->faker->randomDigitNot(2),
            "tarjetas_rojas"=>$this->faker->randomDigitNot(2)
        ];
    }
}
