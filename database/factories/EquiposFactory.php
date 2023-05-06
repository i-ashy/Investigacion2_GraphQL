<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquiposFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "nombre"=>$this->faker->text(50),
            "liga"=>$this->faker->text(50),
            "partidos_jugados"=>$this->faker->randomDigitNot(2),
            "partidos_ganados"=>$this->faker->randomDigitNot(2),
            "partidos_perdidos"=>$this->faker->randomDigitNot(2),
            "puntos_total"=>$this->faker->randomDigitNot(2)
        ];
    }
}
