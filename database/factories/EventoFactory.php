<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nome'                  => fake()->name(),
            'nome_responsavel'      => fake()->name(),
            'telefone_responsavel'  => fake()->numerify('(##) #####-####'),
            'data'                  => fake()->date($format = 'Y-m-d'),
            'tipo'                  => fake()->randomElement(['FESTA_INFANTIL',
                                                            '15_ANOS',
                                                            'FESTA_ADULTO',
                                                            'CASAMENTO',
                                                            'FORMATURA',
                                                            'CONFRATERNIZACAO',
                                                            'CHURRASCO']),
            'numero_convidados'     => fake()->numberBetween($min = 20, $max = 200),
            'valor'                 => fake()->numberBetween($min = 1000, $max = 3000),
            'observacao'            => fake()->paragraph($nb = 3),
        ];
    }
}
