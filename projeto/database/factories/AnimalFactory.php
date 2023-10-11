<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_animal' => fake()->numberBetween(1,10),
            'nome' => fake()->name(),
            'tipo' => fake()->numberBetween(1,10),
            'idade' => fake()->numberBetween(1,10),
            'sexo' => fake()->text(),
            'cor' => fake()->text(),
            'vacinação' => fake()->text(),
            'castracao' => fake()->text(),
            'descricao' => fake()->text(),
            'situacao'  => fake()->text(),
            'vacina'  => fake()->text(),

            ];
    }
}
